<?php namespace TGL\Tools\Mailer;

class OrderMailer extends AbstractMailer
{
    public function sendUserPrice($event)
    {
        $this->sendTo($event->order->user->email,
            'Thank you for your request!',
            'emails.order.price-set',
            [
                'order_number'      => $event->order->order_number,
                'brand'         => $event->order->brand,
                'model'         => $event->order->model,
                'size'         => $event->order->size,
                'price'       => $event->order->price
            ]);
    }

    public function sendNewComment($comment)
    {
        if(1 == 1)
        {
            $this->sendTo(
                'rodrigo@tgld.co',
                'New comment order #'.
                'emails.order.new-comment',
                [
                    'order_number' => 6545,
                    'comment' => 45
                ]
            );
        }
        else
        {
            $this->sendTo(
                getenv('ADMIN_EMAIL'),
                'New comment order #'.$comment->commentable->order_number,
                'emails.order.new-comment',
                [
                    'order_number' => $comment->commentable->order_number,
                    'comment' => $comment->comment
                ]
            );
        }
    }
}