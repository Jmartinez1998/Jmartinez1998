<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Producers\CotizacionProducer; 

class CotizacionController extends Controller
{
    
    public function send(Request $request, CotizacionProducer $cotizacionProducer)
    {
        $cotizacion = $cotizacionProducer->createCotizacion($request);
        return view('products');
    }
}
