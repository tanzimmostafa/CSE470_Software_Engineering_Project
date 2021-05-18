<?php

class StaffTest extends \PHPUnit\Framework\TestCase
{

	protected $staff;

	public function setUp() :void 
	{

		$this->staff = new \App\MVC_Structure\Model\Staffs;
		
	}


	public function testGetName()
	{
		$this->staff->setName('Fardeen');

		$this->assertEquals($this->staff->getName(), 'Fardeen');
	}

	public function testGetUsername()
	{
		$this->staff->setUsername('fardeen667');

		$this->assertEquals($this->staff->getUsername(), 'fardeen667');
	}


	public function testUsernameIsTrimmed()
	{
		$staff = new \App\MVC_Structure\Model\Staffs;

		$staff->setUsername(' tanzim     ');

		$this->assertEquals($staff->getUsername(), 'tanzim');


	}

	public function testEmailCanBeSet()
	{
		$staff = new \App\MVC_Structure\Model\Staffs;

		$staff->setEmail('tanzim.mostafa@gmail.com');

		$this->assertEquals($staff->getEmail(), 'tanzim.mostafa@gmail.com');
	}

}