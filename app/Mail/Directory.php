<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Directory extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'redaksi@pergikeliling.com';
        $subject = 'Directory';
        $name = 'Redaksi | Pergikeliling.com';
        $data = $this->data;
        return $this->view('emails.directory',compact('data'))
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
