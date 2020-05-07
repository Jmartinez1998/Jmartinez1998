<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use DB;
use Validator;
use App\Section;
use App\Post;
use App\Comentario;
use Storage;

class SectionController extends Controller
{
  public function seccion(Request $req,$id){
    $seccion = Section::find($id);
    if($seccion){
      $posts  = Section::join("publicaciones","publicaciones.seccion_id","=","secciones.id")
                        ->where("publicaciones.estatus","=","1")
                        ->where("secciones.id","=",$id)
                        ->select("publicaciones.*")
                        ->paginate(3);
      return view("seccion",["posts"=>$posts,"seccion"=>Section::find($id)]);
    }else{
      return view("404");
    }
  }
  public function sendAdminView(){
    $sections = Section::where('estatus', '=', 1)->get();
    //$sections = DB::select('call sec_pro()');
    return view('sections', ['secciones' => $sections]);
  }

  public function create(Request $req){
    $data = $req->all();
    $validator = Validator::make($data, [
      'titulo' => 'required',
      'imagen' => 'required'
    ],[
      "required"  => "El campo :attribute es requerido. ",
      "confirmed" => "Las contraseñas no coinciden. ",
      "unique"    => "El campo :attribute ya se encuentra en uso. ",
      "min"       => "El campo :attribute debe contener minimo 6 caracteres. ",
      "before"    => "La fecha de inicio debe ser antes de la fecha fin.",
      "after"    =>  "La fecha de fin debe ser después de la fecha inicio."
    ]);
    if(!$validator->fails()){
      try {
        $section = new Section();
        $section->titulo = $req->titulo;
        $section->estatus = 1;
        if ($req->contenido != ""){ $section->contenido = $req->contenido; }
        if(!$req->hasFile("imagen")){
          $section->imagen = "default.png";
        }else{
          $file = $req->imagen;
          $name = rand().Date("Y-m-d").".".$file->getClientOriginalExtension();
          $path = public_path()."/assets/images/secciones/";
          $file->move($path,$name);
          $section->imagen = $name;
        }
        $section->save();
        return Response::json(array("status" => "200", "data" => $section));
      } catch (Exception $e) {
        return Response::json(array("status" => "500", "data" => $e));
      }

    }
    else {
      return Response::json(array("status" => "401", "data" => $validator->messages()));
    }
  }
  public function getInfo(Request $req){
   $section = Section::where('id', '=', $req->id)->first();
   if ($section){
     return Response::json(array("status" => "200", "data" => $section));
   }
   else {
     return Response::json(array("status" => "404", "data" => null));
   }
 }

  public function update(Request $req){
    $data = $req->all();
    $validator = Validator::make($data, [
      'titulo' => 'required',
      'contenido' => 'required'
    ],[ "required"  => "El campo :attribute es requerido." ]);
    if(!$validator->fails()){
      try {
        $section = Section::find($req->id);
        $section->titulo = $req->titulo;
        $section->contenido = $req->contenido;
        $imageStored = $section->imagen;
        if ($req->imagen != null){
          $imagenFile = $req->imagen;
          $public_path = public_path();
          $imagenName = rand().Date("Y-m-d").".".$imagenFile->getClientOriginalExtension();
          $imagenFile->move($public_path.'/assets/images/secciones', $imagenName);
          if ($imageStored != "default.png") {
              unlink($public_path.'/assets/images/secciones/'.$imageStored);
          }
          $section->imagen = $imagenName;
        }
        $section->save();
        return Response::json(array("status" => "200", "data" => $section));
      } catch (Exception $e) {
        return Response::json(array("status" => "500", "data" => $e));
      }
    }
    else {
      return Response::json(array("status" => "401", "data" => $validator->messages()));
    }
  }

  public function delete(Request $req){
    $section = Section::where('id', '=', $req->id)->update(array(
      'estatus' => 0
    ));
    if ($section > 0){
      return Response::json(array("status" => "200", "data" => $section));
    }
    else {
      return Response::json(array("status" => "404", "data" => $section));
    }
  }
  public function blog(){
    $sections   = Section::where('estatus', '=', 1)->get();
    $destacados = $this->getMostPopular();
    $recientes  = $this->getCurrents();
    //$recientes->setPageName("pageRecientes");
    return view('blog',["secciones"=>$sections,"destacados"=>$destacados,"recientes"=>$recientes]);
  }
  public function getMostPopular(){
    return Post::leftJoin("comentarios","comentarios.post_id","=","publicaciones.id")
      ->join('secciones','secciones.id','publicaciones.seccion_id')
      ->where('secciones.estatus',"=","1")
      ->where('publicaciones.estatus',"=","1")
      ->select("publicaciones.id","publicaciones.created_at",
        "publicaciones.titulo","publicaciones.contenido",
         "publicaciones.banner",
         DB::raw("count(comentarios.id) cantidad"))
      ->groupBy("publicaciones.id")
      ->groupBy("publicaciones.created_at")
      ->groupBy("publicaciones.titulo")
      ->groupBy("publicaciones.contenido")
      ->groupBy("publicaciones.banner")
      ->orderBy("cantidad","desc")
      ->limit("20")
      ->paginate(3);
  }
  public function getCurrents(){
    return Post::leftJoin("comentarios","comentarios.post_id","=","publicaciones.id")
          ->join('secciones','secciones.id','publicaciones.seccion_id')
          ->where('secciones.estatus',"=","1")
          ->where('publicaciones.estatus',"=","1")
    ->select("publicaciones.id","publicaciones.created_at",
      "publicaciones.titulo","publicaciones.contenido",
       "publicaciones.banner",
       DB::raw("count(comentarios.id) cantidad"))
    ->groupBy("publicaciones.id")
    ->groupBy("publicaciones.created_at")
    ->groupBy("publicaciones.titulo")
    ->groupBy("publicaciones.contenido")
    ->groupBy("publicaciones.banner")
    ->orderBy("publicaciones.id","desc")
    ->limit("20")
    ->paginate(3,"[*]","recientes");
  }
}
