<?php namespace TGL\Handlers\Events;

use TGL\Events\CommentWasPosted;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use TGL\Tools\Mailer\OrderMailer;

class Email
{

	/**
	 * @var OrderMailer
	 */
	protected  $orderMailer;

	/**
	 * Create the event handler.
	 * @param OrderMailer $orderMailer
	 */
	public function __construct(OrderMailer $orderMailer)
	{
		//
		$this->orderMailer = $orderMailer;
	}

	/**
	 * Handle the event.
	 *
	 * @param  CommentWasPosted  $event
	 */
	public function sendNewComment($event)
	{
		$this->orderMailer->sendNewComment($event);
	}

}
