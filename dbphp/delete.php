<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
// connect to the database
include '../inc/connect-db.php';

// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
	// get id value
	$id = $_GET['id'];

	// delete the entry
	$result = mysqli_query($connection, "DELETE FROM survey2 WHERE id=$id");

	// redirect back to the homepage to see the results
	header("Location: ../info.php");

} else {
	// if id isn't set, or isn't valid, redirect back to homepage
	header("Location: ../info.php");
}
?>