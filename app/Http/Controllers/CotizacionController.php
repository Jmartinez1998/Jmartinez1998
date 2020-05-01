<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Producers\CotizacionProducer; 
use App\Producto;

class CotizacionController extends Controller
{
    
    public function send(Request $request, CotizacionProducer $cotizacionProducer)
    {
        $products = Producto::get();
        $cotizacion = $cotizacionProducer->createCotizacion($request);
        return view('products',compact('products'));
    }
}