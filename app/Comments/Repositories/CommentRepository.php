<?php namespace TGL\Comments\Repositories;

use Illuminate\Contracts\Auth\Guard;
use TGL\Orders\Entities\Order;
use TGL\Comments\Comment;

class CommentRepository
{
    protected $auth;

    function __construct(Comment $model, Guard $auth)
    {
        $this->auth = $auth;
        $this->model = $model;
    }

    public function addOrderComment($comment)
    {
        $order = Order::find($comment->order_id);

        $this->model->user_id = $this->auth->user()->id;
        $this->model->comment = $comment->comment;

        $order->comments()->save($this->model);

        return $this->model;
    }
}