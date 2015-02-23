<?php namespace TGL\Http\Controllers;

use TGL\Http\Requests\NewCommentRequest;
use TGL\Commands\PostOrderCommentCommand;

class CommentController extends Controller
{
    public function addOrderComment(NewCommentRequest $request)
    {
        $this->dispatchFrom(PostOrderCommentCommand::class, $request);

        return redirect()->back();
    }
}