<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class welcomeMail extends Mailable
{
    use Queueable, SerializesModels;

     public  $user_name;
     public  $emailTo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username,$mailTo)
    {
        $this->user_name=$username;
        $this->emailTo=$mailTo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $details = [
            
        //     'title' => 'Dear ', $this->user_name,
        //     'body'  =>  'Welcome to agri production.' 
        // ];
        if ($this->emailTo=='admin') 
        {
           return $this
                    ->from('AgriApp@gmail.com')
                    ->subject('New product added.')
                    ->markdown('emails.welcome');
        }
        if($this->emailTo=='newer')
        {
           

                // $title = 'Dear $this->user_name';
                // $body  =  'New customer enrolled';
           
            return $this
                ->from('AgriApp@gmail.com')
                ->subject('New customer enrollement.')
                ->markdown('emails.welcome');
        }
        else if ($this->emailTo=='seller')
        {
     

                // $title = 'Dear  $this->user_name';
                // $body  =  'You have a order from a customer';
            
            return $this   
                ->from('AgriApp@gmail.com')
                ->subject('Your Agri product is in ordering.')
                ->markdown('emails.placeOrder');
        }
        else if($this->emailTo=='customer')
        {
            

                // $title='Dear $this->user_name';
                // $body=  'Your Order is successfully accepted.';
            
            return $this
                ->from('AgriApp@gmail.com')
                ->subject('Your order is accept successfully.')
                ->markdown('emails.orderAccept');
        }
        else if ($this->emailTo='orderReject') 
        {
            // $title = 'Dear $this->user_name';
            // $body =  'Your Order is successfully accepted.';

            return $this
                ->from('AgriApp@gmail.com')
                ->subject('Your order is agri app.')
                ->markdown('emails.orderAccept');
        }
       
    }
}
