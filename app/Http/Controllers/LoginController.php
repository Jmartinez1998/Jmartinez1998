<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Producto;
use App\Post;
use App\Categoria;
use App\Rol;
use DB;
use Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Welcome;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;


class LoginController extends Controller
{
  public function landing(Request $req){
    $productos = Producto::join("categorias","categorias.id","productos.categoria_id")
                          ->where("categorias.estatus","=","1")
                          ->where("productos.estatus","=","1")
                          ->select("productos.nombre","productos.imagen","productos.descripcion","productos.id",DB::raw("categorias.nombre as categoria"))
                          ->get();
    $categorias = Categoria::where("estatus","=","1")->get();
    $posts = $this->getMostPopular();
    return view('landing',["productos"=>$productos,"categorias"=>$categorias,"posts"=>$posts]);
  }
  public function login(Request $req){
    if (Auth::attempt([
      'email' => $req->email,
      'password' => $req->cotrasenia,
      'estatus' => 1
      ])){
        return Response::json(array("status" => "200"));
    }
    else {
      return Response::json(array("status" => "403","contra"=>Hash::make('green86_supernova'),"data"=>$req->all()));
    }
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
      ->limit("3")
      ->get();
  }

  public function logout(){
    Auth::logout();
    return redirect('/');
  }

  public function register(Request $req){
    $user = User::where('email', '=', $req->email)->first();
    if ($user){
      return Response::json(array("status" => "401"));
    }
    else{
      $new = new User();
      $new->nombre_completo = $req->nombre;
      $new->email = $req->email;
      $new->password = Hash::make($req->cotrasenia);
      $new->token = md5($req->cotrasenia);
      $rol = Rol::where('acronimo', '=', 'user')->first();
      $new->rol_id = $rol->id;
      $new->save();
      Auth::attempt([
        'email' => $new->email,
        'password' => $req->cotrasenia,
        'estatus' => 1
      ]);
      return Response::json(array("status" => "200"));
    }
  }
  public function sendMessage(Request $req){
    $data = $req->all();
    $validator = Validator::make($data, [
      'email'   => 'required',
      'name'    => 'required',
      'message' => 'required'
    ],[
      "required"  => "El campo :attribute es requerido. ",
      "confirmed" => "Las contraseñas no coinciden. ",
      "unique"    => "El campo :attribute ya se encuentra en uso. ",
      "min"       => "El campo :attribute debe contener minimo 6 caracteres. ",
      "before"    => "La fecha de inicio debe ser antes de la fecha fin.",
      "after"    =>  "La fecha de fin debe ser después de la fecha inicio."
    ]);
    if(!$validator->fails()){
      $dataSend=[
      	"email"				=>	$req->email,
      	"nombre"			=>	$req->name,
      	"mensage"			=>  $req->message,
        "asunto"      =>  "Audi Laguna - Correo de usuario ".$req->name
      ];
      if(isset($req->id)){
        $producto = Producto::find($req->id);
        $dataSend["producto"] = $producto;
      }
      //return $dataSend["productos"];
      $toMail   = "roger_17@live.com";
      $fromMail = $dataSend["email"];
      $subject  = $dataSend["asunto"];
      try{
      	$mail = Mail::send("emails.welcome",$dataSend,function($message) use($toMail,$fromMail,$subject){
      		$message->to($toMail,$fromMail)->subject($subject);
      	});
      	return Response::json(array("status" => "200", "message" => "El correo se ha enviado exitosamente"));
      }catch (Exception $e) {
        return Response::json(array("status" => "500", "data" => "".$e->getCode()));
      }
    }else{
      return Response::json(array("status" => "401", "data" => $validator->messages()));
    }
	}
}
