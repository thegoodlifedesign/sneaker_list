<?php namespace TGL\Commands;

use TGL\Commands\Command;

class SneakerConRequestCommand extends Command {

	public $username;
	public $email;
	public $password;
	public $brand;
	public $model;
	public $size;
	public $message;
	public $url;

	function __construct($username, $email, $password, $brand, $model, $size, $message = null, $url = null)
	{
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
		$this->brand = $brand;
		$this->model = $model;
		$this->size = $size;
		$this->message = $message;
		$this->url = $url;
	}

}
