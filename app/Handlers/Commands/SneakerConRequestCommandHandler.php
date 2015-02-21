<?php namespace TGL\Handlers\Commands;

use TGL\Commands\SneakerConRequestCommand;

use Illuminate\Queue\InteractsWithQueue;
use TGL\Users\Repositories\UserRepository;

class SneakerConRequestCommandHandler
{

	/**
	 * @var UserRepository
	 */
	private $userRepo;

	/**
	 * Create the command handler.
	 * @param UserRepository $userRepo
	 */
	public function __construct(UserRepository $userRepo)
	{
		$this->userRepo = $userRepo;
	}

	/**
	 * Handle the command.
	 *
	 * @param  SneakerConRequestCommand $command
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function handle(SneakerConRequestCommand $command)
	{
		$this->userRepo->sneakerConOrder($command);
	}

}
