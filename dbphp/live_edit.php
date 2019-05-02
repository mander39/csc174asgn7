<?php
include_once "../inc/connect-db.php";
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
	$update_field='';
	if(isset($input['first'])) {
		$update_field.= "first='".$input['first']."'";
	} else if(isset($input['last'])) {
		$update_field.= "last='".$input['last']."'";
	} else if(isset($input['email'])) {
		$update_field.= "email='".$input['email']."'";
	} else if(isset($input['city'])) {
		$update_field.= "city='".$input['city']."'";
	} else if(isset($input['state'])) {
		$update_field.= "state='".$input['state']."'";
	} else if(isset($input['hasbeen'])) {
		$update_field.= "hasbeen='".$input['hasbeen']."'";
	} else if(isset($input['wouldgo'])) {
		$update_field.= "wouldgo='".$input['wouldgo']."'";
	} else if(isset($input['favorite'])) {
		$update_field.= "favorite='".$input['favorite']."'";
	} else if(isset($input['comment'])) {
		$update_field.= "comment='".$input['comment']."'";
	}
	if($update_field && $input['id']) {
		$sql_query = "UPDATE survey2 SET $update_field WHERE id='" . $input['id'] . "'";
		mysqli_query($connection, $sql_query) or die("database error:". mysqli_error($connection));
	}
}
?>