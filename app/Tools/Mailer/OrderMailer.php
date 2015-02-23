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
        if($comment->user->is_admin == 1)
        {
            $this->sendTo(
                $comment->user->email,
                'New comment order #'.$comment->commentable,
                'emails.order.new-comment',
                [
                    'order_number' => $comment->commentable,
                    'comment' => $comment->comment
                ]
            );
        }
        else
        {
            $this->sendTo(
                getenv('ADMIN_EMAIL'),
                'New comment order #'.$comment->commentable,
                'emails.order.new-comment',
                [
                    'order_number' => $comment->commentable,
                    'comment' => $comment->comment
                ]
            );
        }
    }
}