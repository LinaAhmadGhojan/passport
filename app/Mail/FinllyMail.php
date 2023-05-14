<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FinllyMail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->view('emails.finall_page')
                    ->subject('finlly informtion register in our website')
                  //  ->cc(['tm.gh803@gmail.com', 'tm.gh803@gmail.com'])
                    ->to($this->emil);
    }
}
