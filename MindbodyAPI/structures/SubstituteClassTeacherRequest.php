<?php

namespace MindbodyAPI\structures;

class SubstituteClassTeacherRequest {

	public $ClassID; // long
	public $StaffID; // long
	public $OverrideConflicts; // boolean
	public $SendClientEmail; // boolean
	public $SendOldStaffEmail; // boolean
	public $SendNewStaffEmail; // boolean

}

?>