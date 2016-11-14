<?php

namespace MindbodyAPI\structures;

class WaitlistEntry {

	public $ID; // int
	public $ClassID; // long
	public $ClassDate; // dateTime
	public $Client; // Client
	public $ClassSchedule; // ClassSchedule
	public $EnrollmentDateForward; // dateTime
	public $RequestDateTime; // dateTime
	public $Web; // boolean
	public $VisitRefNo; // int

}

?>