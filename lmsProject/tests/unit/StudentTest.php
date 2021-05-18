<?php

class StudentTest extends \PHPUnit\Framework\TestCase
{

	protected $student;

	public function setUp() :void 
	{

		$this->student = new \App\MVC_Structure\Model\Student;
		
	}


	public function testGetName()
	{
		$this->student->setName('Tanzim');

		$this->assertEquals($this->student->getName(), 'Tanzim');
	}

	public function testGetUsername()
	{
		$this->student->setUsername('tanzim001');

		$this->assertEquals($this->student->getUsername(), 'tanzim001');
	}


	public function testUsernameIsTrimmed()
	{
		$student = new \App\MVC_Structure\Model\Student;

		$student->setUsername(' Ariyan     ');

		$this->assertEquals($student->getUsername(), 'Ariyan');


	}

	public function testAddressCanBeSet()
	{
		$student = new \App\MVC_Structure\Model\Student;

		$student->setAddress('4/11 Gulshan');

		$this->assertEquals($student->getAddress(), '4/11 Gulshan');
	}



}