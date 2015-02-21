<?php namespace TGL\Handlers\Commands;

use TGL\Commands\ShoeRequestCheckoutCommand;

use Illuminate\Queue\InteractsWithQueue;
use TGL\Users\Repositories\UserRepository;

class ShoeRequestCheckoutCommandHandler
{

	protected $userRepo;

	function __construct(UserRepository $userRepo)
	{
		$this->userRepo = $userRepo;
	}

	/**
	 * Handle the command.
	 *
	 * @param  ShoeRequestCheckoutCommand  $command
	 * @return void
	 */
	public function handle(ShoeRequestCheckoutCommand $command)
	{
		$this->userRepo->placeOrder($command);
	}

}
