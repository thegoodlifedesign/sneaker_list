<?php namespace TGL\Events;

use TGL\Comments\Comment;
use TGL\Events\Event;

use Illuminate\Queue\SerializesModels;

class CommentWasPosted extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @param Comment $comment
	 * @return void
	 */
	public function __construct(Comment $comment)
	{
		$this->comment = $comment;
	}

}
