<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class messageOrder extends Mailable
{
    use Queueable, SerializesModels;
    
    public $subject = 'Orden';

    public $msg;
    /**
     * Create a new msg instance.
     *
     * @return void
     */
    public function __construct($msg)
    {
       $this->msg = $msg;
    }

    /**
     * Build the msg.
     *
     * @return $this
     */
    public function build()
    {   if($this->msg =="0"){
        return $this->view('emails.message-order-shop');
    }else{
        return $this->view('emails.message-order');

    }
    }
}
