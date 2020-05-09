<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cotizacione;
use App\CotizacionRespuesta;
use App\Http\Producers\CotizacionProducer; 

class CotizacionRespuestaController extends Controller
{
    public function send(Request $request, CotizacionProducer $cotizacionProducer)
    {
        $cotizacionResp = $cotizacionProducer->createCotizacionResp($request);
        $cotizaciones = Cotizacione::where('estatus', '=', 1)->with('producto')->get();
        return view('admin.cotizaciones',compact('cotizaciones'));
    }
}
