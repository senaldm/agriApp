<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class notification extends Mailable
{
    use Queueable, SerializesModels;

    private String $email;
    private String $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$username)
    {
        $this->email=$email;
        $this->username=$username;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        echo "check time";
        
        return $this
                    ->from('AgriApp@gmail.com')
                    ->to($this->email)
                    ->subject('Welcome to Agri')
                    // ->attachFromStorage()
                    ->view('emails.welcome');
    }
}
