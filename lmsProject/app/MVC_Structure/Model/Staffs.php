<?php

namespace App\MVC_Structure\Model;

class Staffs
{
	public $name;
	public $email;
	public $phone;
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


	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setPhone($phone)
	{
		$this->phone = trim($phone);

	}

	public function getPhone()
	{
		return $this->$phone;
	}

    
	public function setPassword($password)
	{
		$this->name = $password;

	}


}