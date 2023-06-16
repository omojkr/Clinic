<?php
	session_start();
	include_once('db.php');

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstName'];
		$middleInitial = $_POST['middleInitial'];
		$lastname = $_POST['lastName'];
		$email = $_POST['email'];
		$contact_number = $_POST['contact_number'];
		$dateofbirth = $_POST['dateofbirth'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$sql = "INSERT INTO registered_users (firstname,middleInitial, lastname, email, contact_number, dateofbirth, address, password, confirm_password) 
				VALUES ('$firstname', '$middleInitial', '$lastname', '$email', '$contact_number', '$dateofbirth', '$address', '$password', '$confirm_password')";

		//use for MySQLi OOP
		if($con->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}elseif ($password != $confirm_password){
			$error=" Password does not match";
		}
		elseif(strlen($password) <5){
			$error=" Password must be at least 5 characters";
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: patients.php');
?>