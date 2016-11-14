<?php

namespace MindbodyAPI\structures;

class ClientIndex {

	public $RequiredBusinessMode; // boolean
	public $RequiredConsumerMode; // boolean
	public $Action; // ActionCode
	public $ID; // int
	public $Name; // string
	public $Values; // ArrayOfClientIndexValue

}

?>