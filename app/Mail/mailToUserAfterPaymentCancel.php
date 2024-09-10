<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class mailToUserAfterPaymentCancel extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    public function build()
    {
        return $this->subject('We Market Research | Sorry ! Payment Cancel')
        ->from($address = 'noreply@wemarketresearch.com', $name = "We Market Research")
        ->view('front.Mails.mailToUserAfterPaymentCancel');
    }

}
