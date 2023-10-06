<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = config("mail.from.address");
        $name = 'Tec Com';

        return $this->view('emails.order')->with(['id' => $this->order->payment_id,
        'mode' => $this->order->payment_mode,
        'order_id'=> $this->order->id,
        'tot'=> $this->order->total_price,
        'fname'=> $this->order->fname,
        'lname'=> $this->order->lname,
        'address'=> $this->order->address,
        'city'=> $this->order->city,
        'email'=> $this->order->email,
        'color'=> $this->order->color,
        'phone'=> $this->order->phone])->from($address, $name);
            
    }
}
