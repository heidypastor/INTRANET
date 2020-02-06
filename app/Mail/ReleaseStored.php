<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReleaseStored extends Mailable
{
    use Queueable, SerializesModels;

    public $release;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($release)
    {
        $this->release = $release;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = url('/releases/'.$this->release->id);

        return $this->from('notificaciones@prosarc.com.co', 'Prosarc S.A. ESP')
                    ->subject('Nuevo Comunicado')
                    ->markdown('emails.releaseStored');
    }
}
