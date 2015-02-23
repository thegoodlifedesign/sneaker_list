<?php namespace TGL\Handlers\Commands;

use TGL\Comments\Comment;
use TGL\Comments\Repositories\CommentRepository;
use TGL\Events\CommentWasPosted;
use TGL\Commands\PostOrderCommentCommand;

class PostOrderCommentCommandHandler
{
    protected $commentRepo;

    function __construct(CommentRepository $commentRepo)
    {
        $this->commentRepo = $commentRepo;
    }

    /**
     * Handle the command.
     *
     * @param $command
     * @return mixed
     */
    public function handle(PostOrderCommentCommand $command)
    {
        $comment = Comment::postOrderComment($command->comment, $command->order_id);

        $db_comment = $this->commentRepo->addOrderComment($comment);

       // event(new CommentWasPosted($db_comment));

        return $comment;
    }
}