<?php namespace TGL\Handlers\Events;

use TGL\Events\OrderPriceWasSet;
use TGL\Events\UserWasRegistered;
use TGL\Tools\Mailer\RegisterMailer;
use TGL\Tools\Mailer\OrderMailer;

class EmailConfirmation{

	protected $registerMailer;

	/**
	 * @var OrderMailer
	 */
	protected $orderMailer;

	public function __construct(RegisterMailer $registerMailer, OrderMailer $orderMailer)
	{
		$this->registerMailer = $registerMailer;
		$this->orderMailer = $orderMailer;
	}

	public function sendWelcomeEmail(UserWasRegistered $event)
	{
		$this->registerMailer->sendWelcome($event);
	}

	public function sendAdminNewUserEmail(UserWasRegistered $event)
	{
		$this->registerMailer->sendNewUser($event);
	}

	public function sendUserOrderPrice(OrderPriceWasSet $event)
	{
		$this->orderMailer->sendUserPrice($event);
	}


}
