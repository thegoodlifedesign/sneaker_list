<?php namespace TGL\Handlers\Events;

use TGL\Events\UserWasRegistered;
use TGL\Tools\Mailer\RegisterMailer;

class EmailConfirmation{

	protected $registerMailer;

	public function __construct(RegisterMailer $registerMailer)
	{
		$this->registerMailer = $registerMailer;
	}

	public function sendWelcomeEmail(UserWasRegistered $event)
	{
		$this->registerMailer->sendWelcome($event);
	}

	public function sendAdminNewUserEmail(UserWasRegistered $event)
	{
		$this->registerMailer->sendNewUser($event);
	}

}
