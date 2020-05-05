<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Producers\CotizacionProducer; 
use App\Producto;
use App\Cotizacione;

class CotizacionController extends Controller
{
    
    public function send(Request $request, CotizacionProducer $cotizacionProducer)
    {
        $products = Producto::get();
        $cotizacion = $cotizacionProducer->createCotizacion($request);
        return view('products',compact('products'));
    }

    public function view(Request $req){
        $Cotizaciones = Cotizacione::where('estatus', '=', 1)->with('producto')->get();
        return view('admin.cotizaciones', ['cotizaciones' => $Cotizaciones]);
      }

      public function viewCotizacion(Request $req,$id){
        $cotizacion = Cotizacione::where('estatus', '=', 1)->where('id', '=', $id)->first();
        return view('admin.cotizacion', compact('cotizacion'));
      }

      public function delete(Request $req,$id){
        $Cotizacion = Cotizacione::where('id', '=', $id)->update(array(
          'estatus' => 0
        ));
        $Cotizaciones = Cotizacione::where('estatus', '=', 1)->get();
        return view('admin.cotizaciones',['cotizaciones' => $Cotizaciones]);
      }
}