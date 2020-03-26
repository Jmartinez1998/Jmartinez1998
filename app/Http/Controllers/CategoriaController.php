<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use DB;
use Validator;
use App\Categoria;
use App\Section;
use App\Comentario;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

  public function getInfo(Request $req){
   $categoria = Categoria::where('id', '=', $req->id)->first();
   if ($categoria){
     return Response::json(array("status" => "200", "data" => $categoria));
   }
   else {
     return Response::json(array("status" => "404", "data" => null));
   }
 }
  public function create(Request $req){
    $data = $req->all();
    $validator = Validator::make($data, [
      'nombre' => 'required|unique:categorias',
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
        $categoria = new Categoria();
        $categoria->nombre = $req->nombre;
        $categoria->estatus = 1;
        $categoria->save();
        return Response::json(array("status" => "200", "data" => $categoria));
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
      'nombre' => 'required',
    ],[ "required"  => "El campo :attribute es requerido." ]);
    if(!$validator->fails()){
      try {
        $Categoria = Categoria::find($req->id);
        $Categoria->nombre = $req->nombre;
        $Categoria->save();
        return Response::json(array("status" => "200", "data" => $Categoria));
      } catch (Exception $e) {
        return Response::json(array("status" => "500", "data" => $e));
      }
    }
    else {
      return Response::json(array("status" => "401", "data" => $validator->messages()));
    }
  }

  public function delete(Request $req){
    $Categoria = Categoria::where('id', '=', $req->id)->update(array(
      'estatus' => 0
    ));
    if ($Categoria > 0){
      return Response::json(array("status" => "200", "data" => $Categoria));
    }
    else {
      return Response::json(array("status" => "404", "data" => $Categoria));
    }
  }

  public function viewCategoriaAdmin(Request $req){
    $Categorias = Categoria::where('estatus', '=', 1)->get();
    return view('categorias', ['categorias' => $Categorias]);
  }
}
