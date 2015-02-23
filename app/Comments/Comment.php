<?php namespace TGL\Comments;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'commentable_id', 'commentable_type', 'comment', 'order_id'];

    public static function postOrderComment($comment, $order_id)
    {
       return  new static(compact('comment', 'order_id'));
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('TGL\Users\Entities\User', 'user_id');
    }
} 