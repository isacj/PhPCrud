<?php

include('Connection3.php');

	$id = $_GET['q'];

	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$phone = $_POST['Phone'];


	$query = "UPDATE `List` 
			SET name = '$name', email = '$email', phone = '$phone' 
			WHERE id = '$id'";

	if (mysqli_query($mysqli, $query))	{
		header ("location:index.php");
	}	else  	{

		echo'Update Failed';
	}
	
