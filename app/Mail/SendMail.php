<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $msg;

    public function __construct($name , $email , $phone , $message)
    {

        $this->name    = $name;
        $this->email   = $email;
        $this->phone   = $phone;
        $this->message = $message;
    }


    public function build()
    {
        return $this->markdown('emails.contact',[
            'name'    => $this->name ,
            'email'   => $this->email,
            'phone'   => $this->phone,
            'message' => $this->message
        ]);

    }
}
