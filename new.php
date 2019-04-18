<?php
error_reporting(0);
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
	// get form data, making sure it is valid
	$firstname = '';
	$lastname = '';
	$phone = '';
	$email = '';

	
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO manderson_phonebook (firstname, lastname, phone, email) VALUES ('$firstname', '$lastname', '$phone', '$email')");

		// once saved, redirect back to the view page
		header("Location: index.php");
	

?>