<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $users){
      $this->users = $users;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){

      return $this->to('levisbandhunt@gmail.com')->from('no-reply@levisbandhunt.com')->subject('Contact us from '.$this->users['name'])->text('emails.contact')->with([
        'data' => $this->users
      ]);
    }
}
