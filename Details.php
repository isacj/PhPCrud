<?php

	include ('Connection3.php');

	$id = $_GET ['q'];

	$query = "SELECT id, name, phone, email from List where id = '$id'";

	$run_query = mysqli_query($mysqli, $query);

	$List = mysqli_fetch_object($run_query);


?>


<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
		<h2>Contact Detail</h2>
		<hr>

	<a href="index.php"><button>Back</button></a>

	<fieldset>

		<legend>Contact</legend>

		<table border="1"	cellspacing="3"	cellpadding="3" width="50%" height="200px">
		<tr>

				<th>#ID</th>
				<td> <?= $List ->id; ?> </td>

		</tr>

		<tr>

				<th>Name</th>
				<td> <?= $List->name; ?> </td>

		</tr>

		<tr>

				<th>Email</th>
				<td> <?= $List->email; ?> </td>

		</tr>

		<tr>

				<th>phone</th>
				<td> <?= $List->phone; ?> </td>

		</tr>

		<tr>

				<td colspan="2"	align="Center">
					<a href="Delete.php?q=<?= $List->id; ?>" onclick="return confirm ('Sure?')"><button>Delete</button></a>
				</td>

		</tr>


		</table>
		</fieldset>
</body>
</html>