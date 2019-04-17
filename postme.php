<?php
error_reporting(0);
session_start();
include('connect-db.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$result = mysqli_query($connection, "INSERT INTO manderson_phonebook (firstname, lastname, phone, email) VALUES ('$firstname', '$lastname', '$phone', '$email')");
?>