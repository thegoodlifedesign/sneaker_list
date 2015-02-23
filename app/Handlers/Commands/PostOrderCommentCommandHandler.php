<?php namespace TGL\Handlers\Commands;

use TGL\Comments\Comment;
use TGL\Comments\Repositories\CommentRepository;
use TGL\Events\CommentWasPosted;
use TGL\Commands\PostOrderCommentCommand;
use TGL\Tools\Mailer\OrderMailer;

class PostOrderCommentCommandHandler
{
    protected $commentRepo;

    /**
     * @var OrderMailer
     */
    protected $orderMailer;

    function __construct(CommentRepository $commentRepo, OrderMailer $orderMailer)
    {
        $this->commentRepo = $commentRepo;
        $this->orderMailer = $orderMailer;
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

        $this->orderMailer->sendNewComment($db_comment);

        return $comment;
    }
}