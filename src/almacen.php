<?php

class almacem 
{
	public $nombre;
	public $tipo;
	private $cantidad;

	function __construct($nombre,$tipo,$cantidad)
	{
		$this->nombre=$nombre;
		$this->tipo=$tipo;
		$this->cantidad=$cantidad;
	}
}