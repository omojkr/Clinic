<?php
	session_start();
	include_once('db.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstName = $_POST['firstName'];
		$middleInitial = $_POST['middleInitial'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$contact_number = $_POST['contact_number'];
		$dateofbirth = $_POST['dateofbirth'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$sql = "UPDATE registered_users SET firstName = '$firstName', middleInitial = '$middleInitial', lastName = '$lastName', email = '$email',
				contact_number = '$contact_number', dateofbirth = '$dateofbirth', address = '$address', password = '$password', confirm_password = '$confirm_password' WHERE id = '$id'";

		//use for MySQLi OOP
		if($con->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: patients.php');

?>