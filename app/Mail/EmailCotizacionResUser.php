<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailCotizacionResUser extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = 'Cotización AudiLaguna';
    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.respuestas.cotizacionUser');
    }
}
