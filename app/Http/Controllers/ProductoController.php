<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use DB;
use Validator;
use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
  public function getInfo(Request $req){
   $producto = Producto::where('id', '=', $req->id)->first();
   if ($producto){
     return Response::json(array("status" => "200", "data" => $producto));
   }
   else {
     return Response::json(array("status" => "404", "data" => null));
   }
 }
  public function create(Request $req){
    $data = $req->all();
    $validator = Validator::make($data, [
      'nombre'        => 'required',
      'descripcion'   => 'required',
      'categoria_id'  => 'required',
      'imagen'        => 'required'
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
        $producto = new Producto();
        $producto->nombre = $req->nombre;
        $producto->descripcion = $req->descripcion;
        if(!$req->hasFile("imagen")){
          $producto->imagen = "default.png";
        }else{
          $file = $req->imagen;
          $name = rand().Date("Y-m-d").".".$file->getClientOriginalExtension();
          $path = public_path()."/assets/images/productos/";
          $file->move($path,$name);
          $producto->imagen = $name;
        }
        $producto->estatus = 1;
        $producto->categoria_id = $req->categoria_id;
        $producto->save();
        return Response::json(array("status" => "200", "data" => $producto));
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
      'descripcion' => 'required'
    ],[ "required"  => "El campo :attribute es requerido." ]);
    if(!$validator->fails()){
      try {
        $Producto = Producto::find($req->id);
        $Producto->nombre = $req->nombre;
        $Producto->descripcion = $req->descripcion;
        $imageStored = $Producto->imagen;
        if ($req->imagen != null){
          $imagenFile = $req->file('imagen');
          $public_path = public_path();
          $imagenName = rand().Date("Y-m-d").".".$imagenFile->getClientOriginalExtension();
          $imagenFile->move($public_path.'/assets/images/productos', $imagenName);
          if ($imageStored != "default.png") {
              unlink($public_path.'/assets/images/productos/'.$imageStored);
          }
          $Producto->imagen = $imagenName;
        }
        $Producto->save();
        return Response::json(array("status" => "200", "data" => $Producto));
      } catch (Exception $e) {
        return Response::json(array("status" => "500", "data" => $e));
      }
    }
    else {
      return Response::json(array("status" => "401", "data" => $validator->messages()));
    }
  }

  public function delete(Request $req){
    $Producto = Producto::where('id', '=', $req->id)->update(array(
      'estatus' => 0
    ));
    if ($Producto > 0){
      return Response::json(array("status" => "200", "data" => $Producto));
    }
    else {
      return Response::json(array("status" => "404", "data" => $Producto));
    }
  }

  public function viewProductoAdmin(Request $req,$id){
    $Productos = Producto::where('estatus', '=', 1)->where('categoria_id', '=', $id)->get();
    return view('productos', ['productos' => $Productos, 'categoria' => Categoria::find($id)]);
  }
}
