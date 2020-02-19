<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class sendAlertNoRealizado extends Mailable
{
    use Queueable;

    public $alert;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($alert)
    {
        $this->alert = $alert;
        /*$this->alert->AlertDateEvent = Carbon::createFromFormat('Y-m-d', $alert->AlertDateEvent);*/
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /*return $this->markdown('emails.sendAlertNoRealizado');*/

        $url = url('/alerts/'.$this->alert->id);

        return $this->from('notificaciones@prosarc.com.co', 'Prosarc S.A. ESP')
                    ->subject('No Terminado')
                    ->markdown('emails.sendAlertNoRealizado');
    }
}
