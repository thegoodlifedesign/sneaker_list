<?php namespace TGL\Http\Controllers\Auth;

use Illuminate\Bus\Dispatcher;
use TGL\Commands\UserRegisterCommand;
use TGL\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use TGL\Http\Requests\LoginRequest;
use TGL\Http\Requests\RegisterRequest;

class AuthController extends Controller {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;
	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard $auth
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;

		$this->middleware('guest', ['except' => 'getLogout']);
	}


	/**
	 * Show the application registration form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getSignUp()
	{
		return view('auth.sign-up');
	}

	/**
	 * Handle a registration request for the application.
	 *
	 * @param \Illuminate\Foundation\Http\FormRequest|RegisterRequest $request
	 * @param Dispatcher $dispatcher
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function postRegister(RegisterRequest $request, Dispatcher $dispatcher)
	{
		$user = $this->dispatchFrom(UserRegisterCommand::class, $request);

		$this->auth->login($user);

		//Flash::message('Thank you for signing up!');

		return redirect()->intended('/'.$this->auth->user()->slug.'/orders');
	}

	/**
	 * Handle a login request to the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postLogin(LoginRequest $request)
	{
		$credentials = $request->only('username', 'password');

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			return redirect()->intended('/'.$this->auth->user()->slug.'/orders');
		}

		return redirect('/auth/sign-up')
			->withInput($request->only('email'))
			->withErrors([
				'email' => 'These credentials do not match our records.',
			]);
	}

	/**
	 * Log the user out of the application.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogout()
	{
		$this->auth->logout();

		return redirect('/');
	}

}
