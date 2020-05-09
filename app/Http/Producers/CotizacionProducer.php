<?php

namespace App\Http\Producers;

use App\Cotizacione;
use App\CotizacionRespuesta;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Mail\EmailCotizacionUser;
use App\Mail\EmailCotizacionAdmin;
use App\Mail\EmailCotizacionResUser;
use App\Mail\EmailCotizacionResAdmin;
use Mail;

class CotizacionProducer
{
    public function createCotizacion($request) {
        
        $data 				     = $request->all();
        $cotizacion              = new Cotizacione();
        $cotizacion ->nombre     = $data['nombre'];
        $cotizacion ->email      = $data['correo'];
        $cotizacion ->cantidad   = $data['cantidad'];
        $cotizacion ->mensaje    = $data['mensaje'];
        $cotizacion ->fecha      = $data['fecha'];
        $cotizacion ->estatus    = 1;
        $cotizacion ->empresa    = $data['empresa'];
        $cotizacion ->producto_id      = $data['id'];
        $cotizacion ->save();
        $product = Cotizacione::where('id', '=', $cotizacion->id)->with('producto')->first();
        Mail::to($data['correo'])->send(new EmailCotizacionUser($product));
        Mail::to('qarlita.peque.burciaga@gmail.com')->send(new EmailCotizacionAdmin($product));
        return [
            'status'  => 200,
            'message' => 'Cita Creada Correctamente',
            'data'    => compact('scheduledAppointment')
        ];
     }
     public function createCotizacionResp($request) {
        
        $data 				     = $request->all();
        $cotizacion              = new CotizacionRespuesta();
        $cotizacion ->Asunto     = $data['asunto'];
        $cotizacion ->mensaje    = $data['mensaje'];
        $cotizacion ->fecha      = $data['fecha'];
        $cotizacion ->email      = $data['correo'];
        $cotizacion ->estatus    = 1;
        $cotizacion ->cotizacion_id      = $data['cotizacion_id'];
        $cotizacion ->save();
        $respuesta = CotizacionRespuesta::where('id', '=', $cotizacion->id)->with('cotizacion')->first();
        Mail::to($data['correo'])->send(new EmailCotizacionResUser($respuesta));
        Mail::to('qarlita.peque.burciaga@gmail.com')->send(new EmailCotizacionResAdmin($respuesta));
        return [
            'status'  => 200,
            'message' => 'Cita Creada Correctamente',
            'data'    => compact('scheduledAppointment')
        ];
     }
}