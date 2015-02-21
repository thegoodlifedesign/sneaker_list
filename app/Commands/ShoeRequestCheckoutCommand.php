<?php namespace TGL\Commands;

class ShoeRequestCheckoutCommand extends Command
{
	public $first_name;
	public $last_name;
	public $address;
	public $city;
	public $state;

	function __construct($first_name, $last_name, $address, $city, $state)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->address = $address;
		$this->city = $city;
		$this->state = $state;
	}

}
