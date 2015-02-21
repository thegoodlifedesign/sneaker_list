<?php namespace TGL\Tools\Mailer;

class OrderMailer extends AbstractMailer
{
    public function sendUserPrice($event)
    {
        $this->sendTo($event->order->user->email,
            'Welcome to The Sneaker List!',
            'emails.order.price-set',
            [
                'order_number'      => $event->order->order_number,
                'brand'         => $event->order->brand,
                'model'         => $event->order->model,
                'size'         => $event->order->size,
                'price'       => $event->order->price
            ]);
    }
}