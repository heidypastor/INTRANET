<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels; /*Si retiro esta parte puedo agregar toda la información que necesite, incluso las que estan con foraneas y tablas pivot, pero si no incluyo la información completa, no va a aparecer*/ 

class sendAlertYellow extends Mailable
{
    use Queueable, SerializesModels;

    public $alert;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($alert)
    {
        $this->alert = $alert;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = url('/alerts/'.$this->alert->id);

        return $this->from('notificaciones@prosarc.com.co', 'Prosarc S.A. ESP')
                    ->subject('¡¡IMPORTANTE!!')
                    ->markdown('emails.sendAlertYellow');
    }
}
