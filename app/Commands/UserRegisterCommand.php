<?php namespace TGL\Commands;

class UserRegisterCommand extends Command
{
	public $username;
	public $email;
	public $password;

	function __construct($username, $email, $password)
	{
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
	}
}
