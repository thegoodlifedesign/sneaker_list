<?php namespace TGL\Commands;

class PostOrderCommentCommand
{
    public  $comment;
    public $order_id;

    function __construct($comment, $order_id)
    {
        $this->comment = $comment;
        $this->order_id = $order_id;
    }
} 