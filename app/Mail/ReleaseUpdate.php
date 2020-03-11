<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Releases;

class ReleaseUpdate extends Mailable
{
    use Queueable;

    public $releases;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($releases)
    {
        $this->releases = $releases;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('notificaciones@prosarc.com.co', 'Prosarc S.A. ESP')
                    ->subject('Comunicado Actualizado')
                    ->markdown('emails.releaseUpdate');
    }
}
