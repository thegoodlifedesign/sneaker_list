<?php namespace TGL\Events;

use TGL\Events\Event;

use Illuminate\Queue\SerializesModels;
use TGL\Users\Entities\User;

class UserWasRegistered extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

}
