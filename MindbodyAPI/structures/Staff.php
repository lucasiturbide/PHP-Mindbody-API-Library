<?php

namespace MindbodyAPI\structures;

class Staff {

	public $Appointments; // ArrayOfAppointment
	public $Unavailabilities; // ArrayOfUnavailability
	public $Availabilities; // ArrayOfAvailability
	public $Email; // string
	public $MobilePhone; // string
	public $HomePhone; // string
	public $WorkPhone; // string
	public $Address; // string
	public $Address2; // string
	public $City; // string
	public $State; // string
	public $Country; // string
	public $PostalCode; // string
	public $ForeignZip; // string
	public $SortOrder; // int
	public $LoginLocations; // ArrayOfLocation
	public $MultiLocation; // boolean
	public $AppointmentTrn; // boolean
	public $ReservationTrn; // boolean
	public $IndependentContractor; // boolean
	public $AlwaysAllowDoubleBooking; // boolean
	public $UserAccessLevel; // string
	public $ProviderIDs; // ArrayOfString
	public $ProviderIDUpdateList; // ArrayOfProviderIDUpdate
	public $Action; // ActionCode
	public $ID; // long
	public $Name; // string
	public $FirstName; // string
	public $LastName; // string
	public $ImageURL; // string
	public $Bio; // string
	public $isMale; // boolean

}

?>