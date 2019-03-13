<?php

	include('Connection3.php');
	
	$id = $_GET['q'];

	$query = "SELECT id, name, email, phone FROM `List` WHERE id = '$id'";

	$run_query = mysqli_query($mysqli, $query);

	$List = mysqli_fetch_object($run_query);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>

<h1>Update Contacts</h1>
        <hr>

        <fieldset>
        	<legend>Contacts</legend>

       <form method="POST" action="update.php?q=<?= $List->id; ?>">

			<table>
				<tr>
				<td>Name:</td>
				<td><input type="text" name="Name" Value="<?= $List->name?>" required></td>
				</tr>

				<tr>
				<td>Email:</td>
				<td><input type="email" name="Email" Value="<?= $List->email?>"required></td>
				</tr>

				<tr>
				<td>Phone:</td>
				<td><input type="text" name="Phone" Value="<?= $List->phone?>" required></td>
				</tr>

				<tr>
					<td colspan="2"> 

						<hr>

						<Button type="submit" name = "submit"> Update </Button>	 
						</td>
				</tr>

			</table>

		</form>

        </fieldset>

</body>
</html>