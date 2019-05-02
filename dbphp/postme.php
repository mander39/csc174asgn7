<?php
error_reporting(0);
session_start();
include '../inc/connect-db.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$city = $_POST['city'];
$state = $_POST['state'];
$hasbeen = $_POST['hasbeen'];
$wouldgo = $_POST['wouldgo'];
$favorite = $_POST['favorite'];
$comment = $_POST['comment'];

$result = mysqli_query($connection, "INSERT INTO survey2 (first, last, email, city, state, hasbeen, wouldgo, favorite, comment) VALUES ('$first', '$last', '$email', '$city', '$state', '$hasbeen', '$wouldgo', '$favorite', '$comment')");
?>