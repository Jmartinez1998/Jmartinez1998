<?php

namespace App\Http\Producers;

use App\Cotizacione;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Mail\EmailCotizacionUser;
use App\Mail\EmailCotizacionAdmin;
use Mail;

class CotizacionProducer
{
    public function createCotizacion($request) {
        
        $data 				     = $request->all();
        $cotizacion              = new Cotizacione();
        $cotizacion ->nombre     = $data['nombre'];
        $cotizacion ->email    = $data['correo'];
        $cotizacion ->cantidad   = $data['cantidad'];
        $cotizacion ->mensaje    = $data['mensaje'];
        $cotizacion ->fecha      = $data['fecha'];
        $cotizacion ->empresa    = $data['empresa'];
        $cotizacion ->producto_id      = $data['id'];
        $cotizacion ->save();
        Mail::to($data['correo'])->send(new EmailCotizacionUser($cotizacion));
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new EmailCotizacionAdmin($cotizacion));
        return [
            'status'  => 200,
            'message' => 'Cita Creada Correctamente',
            'data'    => compact('scheduledAppointment')
        ];
     }
}