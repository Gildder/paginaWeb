<?php

if(count($_POST)>0){
	$user = MedicData::getById($_POST["id"]);
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->category_id = $_POST["category_id"];
	$user->update();


print "<script>window.location='index.php?view=medics';</script>";


}


?>