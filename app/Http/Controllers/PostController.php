<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use DB;
use Validator;
use App\Post;
use App\Section;
use App\Comentario;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function post(Request $req,$id){
    $post = Post::find($id);
    if($post){
      return view("post",["post"=>$post]);
    }else{
      return view("404");
    }
  }
  public function getInfo(Request $req){
   $post = Post::where('id', '=', $req->id)->first();
   if ($post){
     return Response::json(array("status" => "200", "data" => $post));
   }
   else {
     return Response::json(array("status" => "404", "data" => null));
   }
 }
  public function create(Request $req){
    $data = $req->all();
    $validator = Validator::make($data, [
      'titulo' => 'required|unique:publicaciones',
      'contenido' =>'required',
      'imagen'       =>'required'
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
        $post = new Post();
        $post->titulo = $req->titulo;
        $post->contenido = $req->contenido;
        $post->estatus = 1;
        if(!$req->hasFile("imagen")){
          $post->banner = "default.png";
        }else{
          $file = $req->imagen;
          $name = rand().Date("Y-m-d").".".$file->getClientOriginalExtension();
          $path = public_path()."/assets/images/post/";
          $file->move($path,$name);
          $post->banner = $name;
        }
        $post->usuario_id = 1;
        $post->seccion_id = $req->seccion_id;
        $post->save();
        return Response::json(array("status" => "200", "data" => $post));
      } catch (Exception $e) {
        return Response::json(array("status" => "500", "data" => $e));
      }

    }
    else {
      return Response::json(array("status" => "401", "data" => $validator->messages()));
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
        $Post = Post::find($req->id);
        $Post->titulo = $req->titulo;
        $Post->contenido = $req->contenido;
        $imageStored = $Post->banner;
        if ($req->imagen != null){
          $imagenFile = $req->file('imagen');
          $public_path = public_path();
          $imagenName = rand().Date("Y-m-d").".".$imagenFile->getClientOriginalExtension();
          $imagenFile->move($public_path.'/assets/images/post', $imagenName);
          if ($imageStored != "default.png") {
              unlink($public_path.'/assets/images/post/'.$imageStored);
          }
          $Post->banner = $imagenName;
        }
        $Post->save();
        return Response::json(array("status" => "200", "data" => $Post));
      } catch (Exception $e) {
        return Response::json(array("status" => "500", "data" => $e));
      }
    }
    else {
      return Response::json(array("status" => "401", "data" => $validator->messages()));
    }
  }

  public function delete(Request $req){
    $Post = Post::where('id', '=', $req->id)->update(array(
      'estatus' => 0
    ));
    if ($Post > 0){
      return Response::json(array("status" => "200", "data" => $Post));
    }
    else {
      return Response::json(array("status" => "404", "data" => $Post));
    }
  }

  public function saveComment(Request $req){
    $data = $req->all();
    $validator = Validator::make($data, [
      'message'  => 'required',
      'username' => 'required',
      'email'    => 'required|email',
      'id'       => 'required'
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
        $comentario = new Comentario();
        $comentario->comentario = $req->message;
        $comentario->nombre     = $req->username;
        $comentario->email      = $req->email;
        $comentario->usuario_id = 3;
        $comentario->post_id    = $req->id;
        $comentario->estatus    = 1;
        $comentario->save();
        return Response::json(array("status" => "200", "data" => $comentario));
      } catch (Exception $e) {
        return Response::json(array("status" => "500", "data" => $e));
      }
    }
    else {
      return Response::json(array("status" => "401", "data" => $validator->messages()));
    }
  }
  public function viewPostAdmin(Request $req,$id){
    $Posts = Post::where('estatus', '=', 1)->where('seccion_id', '=', $id)->get();
    return view('posts', ['posts' => $Posts, 'section' => Section::find($id)]);
  }
  public function getComments(Request $req){
    $id = $req->id;
    $comentarios =  Comentario::where("estatus","=",1)->where("post_id","=",$id)->get();
    return Response::json(array("status" => "200", "comments" => $comentarios));
  }

}
