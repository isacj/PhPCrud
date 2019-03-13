<?php 

	include('Connection3.php');

	$id = $_GET ['q'];

	$query = "DELETE FROM List where id = '$id'";

	if (mysqli_query($mysqli, $query))	{
	header ("location: index.php");

} else  {

		echo 'Action Failed';
}