<?php
class Book implements JsonWritable
{
	private $id;
	private $title;

	public function __construct($id,$title){
	// id, naam en books worden toegekend
	}

	public function getJSONString(){
	// de JSON-voorstelling van het object wordt teruggeven.
	}
}
