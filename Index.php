<?php
	
	include ('Connection3.php');

	if (  isset($_POST['submit'])  )  {      

	 $name = $_POST['Name'];
	 $email = $_POST['Email'];
	 $phone = $_POST['Phone']; 

	 $query = "INSERT INTO List (Name, Email, Phone)
			VALUES 	( '$name', '$email', '$phone');";


		if (mysqli_query($mysqli, $query)) {
		echo '<strong style="color: green">Contact Has been Added</strong>';

	
	}

	

}

// Showing Data

$query = "SELECT * FROM `List`";

$run_query = mysqli_query($mysqli, $query);


?>


<!DOCTYPE html>
<html>

<head>
	 <title>Contacts</title>
<head>
</body>

        <h1>Contacts</h1>
        <hr>

        <fieldset>
        	<legend>Contacts</legend>

       <form method="POST" action="index.php">

			<table>
				<tr>
				<td>Name:</td>
				<td><input type="text" name="Name" required></td>
				</tr>

				<tr>
				<td>Email:</td>
				<td><input type="email" name="Email" required></td>
				</tr>

				<tr>
				<td>Phone:</td>
				<td><input type="text" name="Phone" required></td>
				</tr>

				<tr>
					<td colspan="2"> 

						<hr>

						<Button type="submit" name = "submit"> Sumbit </Button>	 
						</td>
				</tr>

			</table>

		</form>

        </fieldset>


        <!-- Contacts -->

        <h1>Contacts List</h1>

        <hr>

        <?php 

        if ($run_query->num_rows == 0)	{
        	echo "<strong style='color: red'>Tables Empty :-(</strong>";
		}	else 	{


        ?>

        <fieldset>

        	<legend>Contact List</legend>

        <table border="1" width="30%" cellpadding="5" cellspacing="6">
        	<tr>
        		<th>#ID</th>
        		<th>Name</th>
        		<th>Email</th>
        		<th>Phone</th>
        		<th>Action</th>
        		
        	</tr>

        	<?php while ( $List = mysqli_fetch_object($run_query) ): ?>

        	<tr>
        	<td><?= $List -> id ?> </td>
        	<td> <?= $List -> Name ?> </td>
        	<td><?= $List -> Email ?> </td>	
        	<td><?= $List -> Phone ?></td>>
      	<td>
      		<a href="delete.php?q=<?= $List ->id; ?>" onclick = "return confirm ('You sure?')"><button>Delete</button></a>

      		<a href="details.php?q=<?= $List ->id; ?>"><button>Details</button></a>

      		<a href="Edit.php?q=<?= $List ->id; ?>"><button>Update</button></a>

      	</td>

			</tr>

			<?php endwhile; ?>

        </table>

        </fieldset>

  <?php }	?>

</body>

</html>