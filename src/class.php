<?php

class usuario 
{
	public $nombre;
	public $apellido;

	function __construct($nombre,$apellido)
	{
		$this->nombre=$nombre;
		$this->apellido=$apellido;
	}
}