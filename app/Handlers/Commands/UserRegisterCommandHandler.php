<?php namespace TGL\Handlers\Commands;

use TGL\Commands\UserRegisterCommand;

use Illuminate\Queue\InteractsWithQueue;
use TGL\Events\UserWasRegistered;
use TGL\Users\Entities\User;
use TGL\Users\Repositories\UserRepository;

class UserRegisterCommandHandler
{
	/**
	 * @var UserRepository
	 */
	protected $userRepo;

	function __construct(UserRepository $userRepo)
	{
		$this->userRepo = $userRepo;
	}

	/**
	 * Handle the command.
	 *
	 * @param  UserRegisterCommand $command
	 * @return User
	 */
	public function handle(UserRegisterCommand $command)
	{
		$user = User::register($command->username, $command->email, $command->password);

		$persisted_user = $this->userRepo->persist($user);

		//event(new UserWasRegistered($persisted_user));

		return $persisted_user;
	}

}
