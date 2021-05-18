<?php

namespace App\MVC_Structure\Model;

class Publisher
{
	public $name;
	public $email;
	public $address;


	public function setName($Name)
	{
		$this->name = $Name;

	}

	public function getName()
	{
		return $this->name;
	}


	public function setAddress($address)
	{
		$this->address = $address;

	}

	public function getAddress()
	{
		return $this->address;
	}


	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}


}