<?php namespace TGL\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		'TGL\Events\UserWasRegistered' => [
			'TGL\Handlers\Events\EmailConfirmation@sendWelcomeEmail',
			'TGL\Handlers\Events\EmailConfirmation@sendAdminNewUserEmail',
		],
		'TGL\Events\OrderPriceWasSet' => [
			'TGL\Handlers\Events\EmailConfirmation@sendUserOrderPrice',
		],
		'TGL\Events\OrderWasAccepted' => [
			'TGL\Handlers\Events\EmailConfirmation@sendAdminUserAccepted',
		],
		'TGL\Events\OrderWasDeclined' => [
			'TGL\Handlers\Events\EmailConfirmation@sendAdminUserDeclined',
		],
		'TGL\Events\CommentWasPosted' => [
			'TGL\Handlers\Events\Email@sendNewComment',
		],
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events)
	{
		parent::boot($events);

		//
	}

}
