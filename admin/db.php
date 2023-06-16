
<?php
	//for MySQLi OOP
	$con = new mysqli('localhost', 'root', '', 'bookingcalendar');
	if($con->connect_error){
	   die("Connection failed: " . $con->connect_error);
	}
	////////////////

	
?>