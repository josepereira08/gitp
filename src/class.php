<?php

class usuario 
{
	public $nombre;
	public $apellido;
	private $ci;

	function __construct($nombre,$apellido,$ci)
	{
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->ci=$ci;

	}
}
