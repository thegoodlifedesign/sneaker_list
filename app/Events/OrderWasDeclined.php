<?php namespace TGL\Events;

use TGL\Events\Event;

use Illuminate\Queue\SerializesModels;

class OrderWasDeclined extends Event {

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
