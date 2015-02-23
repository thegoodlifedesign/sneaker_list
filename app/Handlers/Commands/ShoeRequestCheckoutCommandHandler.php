<?php namespace TGL\Handlers\Commands;

use TGL\Commands\ShoeRequestCheckoutCommand;

use Illuminate\Queue\InteractsWithQueue;
use TGL\Tools\Mailer\OrderMailer;
use TGL\Users\Repositories\UserRepository;

class ShoeRequestCheckoutCommandHandler
{

	protected $userRepo;

	/**
	 * @var OrderMailer
	 */
	private $orderMailer;

	function __construct(UserRepository $userRepo, OrderMailer $orderMailer)
	{
		$this->userRepo = $userRepo;
		$this->orderMailer = $orderMailer;
	}

	/**
	 * Handle the command.
	 *
	 * @param  ShoeRequestCheckoutCommand  $command
	 * @return void
	 */
	public function handle(ShoeRequestCheckoutCommand $command)
	{
		$order = $this->userRepo->placeOrder($command);

		$this->orderMailer->sendNewOrder($order);
	}

}
