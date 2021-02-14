<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Online_admMail extends Mailable
{
    use Queueable, SerializesModels;
    public $online_ad;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($online_ad)
    {
        $this->online_ad = $online_ad;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Online Adimission')->view('emails.online');
    }
}
