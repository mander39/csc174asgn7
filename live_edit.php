<?php
include_once("connect-db.php");
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
	$update_field='';
	if(isset($input['firstname'])) {
		$update_field.= "firstname='".$input['firstname']."'";
	} else if(isset($input['lastname'])) {
		$update_field.= "lastname='".$input['lastname']."'";
	} else if(isset($input['phone'])) {
		$update_field.= "phone='".$input['phone']."'";
	} else if(isset($input['email'])) {
		$update_field.= "email='".$input['email']."'";
	}
	if($update_field && $input['id']) {
		$sql_query = "UPDATE manderson_phonebook SET $update_field WHERE id='" . $input['id'] . "'";
		mysqli_query($connection, $sql_query) or die("database error:". mysqli_error($connection));
	}
}
?>