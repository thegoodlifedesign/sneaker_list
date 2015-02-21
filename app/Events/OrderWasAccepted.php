<?php namespace TGL\Events;

use TGL\Events\Event;

use Illuminate\Queue\SerializesModels;

class OrderWasAccepted extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

}
