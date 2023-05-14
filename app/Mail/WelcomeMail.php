<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;


  protected $id;
    public function __construct()
    {
     /*    $this->id=$id;
        $this->email=$email; */
    }


        public function build()
        {

            return $this->view('emails.welcome')
            ->with(['id'=>auth()->user()->id])
            ->subject('finlly informtion register in our website')
            ->cc(['tm.gh803@gmail.com', 'tm.gh803@gmail.com']);


        }
}

