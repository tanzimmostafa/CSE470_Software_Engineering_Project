<?php

namespace App\MVC_Structure\Model;

class Student
{
	public $name;
	public $address;
	public $username;
	private $password;

	public function setName($Name)
	{
		$this->name = $Name;

	}

	public function getName()
	{
		return $this->name;
	}


	public function setUsername($username)
	{
		$this->username = trim($username);

	}

	public function getUserName()
	{
		return $this->username;
	}


	public function setAddress($address)
	{
		$this->address = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}
    
	public function setPassword($password)
	{
		$this->name = $password;

	}


}