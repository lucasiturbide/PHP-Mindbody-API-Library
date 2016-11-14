<?php

namespace MindbodyAPI\structures;

class Payment {

	public $ID; // long
	public $Amount; // decimal
	public $Method; // int
	public $Type; // string
	public $LastFour; // string
	public $Notes; // string

}

?>