<?php

namespace App\MVC_Structure\Model;

class Book
{
	public $title;
	public $author;
	public $genre;
	public $isbn;
	public $price;
	public $quantity;


	public function setTitle($title)
	{
		$this->title = $title;

	}

	public function getTitle()
	{
		return $this->title;
	}


	public function setAuthor($author)
	{
		$this->author = $author;

	}

	public function getAuthor()
	{
		return $this->author;
	}


	public function setGenre($genre)
	{
		$this->genre = trim($genre);
	}

	public function getGenre()
	{
		return $this->genre;
	}

	public function setIsbn($isbn)
	{
		$this->isbn = $isbn;

	}

	public function getIsbn()
	{
		return $this->isbn;
	}

    
	public function setPrice($price)
	{
		$this->price = $price;

	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;

	}

	public function getQuantity()
	{
		return $this->quantity;
	}	



}