<?php

class PublisherTest extends \PHPUnit\Framework\TestCase
{

	protected $publisher;

	public function setUp() : void
	{
		$this->publisher = new \App\MVC_Structure\Model\Publisher;		
	}


	public function testGetName()
	{
		$this->publisher->setName('Good Publisher');

		$this->assertEquals($this->publisher->getName(), 'Good Publisher');
	}

	public function testGetAddress()
	{
		$this->publisher->setAddress('London');

		$this->assertEquals($this->publisher->getAddress(), 'London');
	}

	public function testEmailCanBeSet() 
	{
        $publisher2=new \App\MVC_Structure\Model\Publisher;

		$publisher2->setEmail('good@gmail.com');
		$this->assertEquals($publisher2->getEmail(), 'good@gmail.com');
	}

}