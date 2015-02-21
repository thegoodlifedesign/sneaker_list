<?php namespace TGL\Events;

use TGL\Events\Event;

use Illuminate\Queue\SerializesModels;
use TGL\Orders\Entities\Order;

class OrderPriceWasSet extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct(Order $order)
	{
		$this->order = $order;
	}

}
