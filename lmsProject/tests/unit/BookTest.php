<?php

class BookTest extends \PHPUnit\Framework\TestCase
{

    protected $book;

	public function setUp() : void
	{
		$this->book = new \App\MVC_Structure\Model\Book;		
	}


	public function testGetTitle()
	{	

		$this->book->setTitle('Data Structures');

		$this->assertEquals($this->book->getTitle(), 'Data Structures');
	}

	public function testGetAuthor()
	{   
		$this->book->setAuthor('john hopkin');

		$this->assertEquals($this->book->getAuthor(), 'john hopkin');
	}


	public function testGenreIsTrimmed()
	{    
		
		$this->book->setGenre('  IT     ');

		$this->assertEquals($this->book->getGenre(), 'IT');

	}

	public function testGenreCanBeSet()
	{
		$this->book->setGenre('IT');

		$this->assertEquals($this->book->getGenre(), 'IT');
	}


	public function testGetIsbn()
	{
		$this->book->setIsbn(2231);

		$this->assertEquals($this->book->getIsbn(), 2231);
	}

	public function testGetPrice()
	{
		$this->book->setPrice(35);

		$this->assertEquals($this->book->getPrice(), 35);
	}

	public function testGetQuantity()
	{
		$this->book->setQuantity(50);

		$this->assertEquals($this->book->getQuantity(), 50);
	}



}