<?php
class Author implements JsonWritable
{
	private $id;
	private $name;
	private $books;

	public function __construct($id, $name, array $books){
	// id, naam en books worden toegekend
	}

	public function getJSONString(){
	// de JSON-voorstelling van het object wordt teruggeven.
	}
}
