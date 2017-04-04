<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Invitee; 

class Invitation extends Mailable
{
    use Queueable, SerializesModels;




    public $invitee;

    public function __construct(Invitee $invitee)
    {
        $this->invitee = $invitee;
    }




        public function build()
    {

        return $this->view('emails.invitee.invited_plain');
    }




}
