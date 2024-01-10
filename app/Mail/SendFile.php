<?php

namespace App\Mail;

use App\Sale;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendFile extends Mailable
{
    use Queueable, SerializesModels;

    public $sale, $hexEmail;

    public function __construct(Sale $sale,$hexEmail)
    {
        $this->sale = $sale;

        $this->hexEmail = $hexEmail;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.sale');
    }
}
