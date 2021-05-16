<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $detalies;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detalies)
    {
        $this->detalies = $detalies;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Message From Omnii.info")->view('dashbord.index.mail');
    }
}
