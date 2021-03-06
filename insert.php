<!-- <?php
	// include_once "databse_connection.php";

?> -->

<!DOCTYPE html>
<html>
	<head>
		<title>Inserting data's into Database</title>
	</head>
	<body>
		<form action="admin.php" method="POST"> <!--I want to run the script as soon as I click the submit button to which I'm adding the connection.  -->
			<!-- Next, I'm Adding up the method just to make sure to send the data to our database through PHP. POST method we can see the data inside the url, we can also use GET method here -->
			Id: <input type="number" name="uid" placeholder="Unique Id" required><br><br>

			Pokemon: <input type="text" name="name" placeholder="Name" required><br><br>

			Type: <input type="text" name="type" placeholder="Water, Flying, Fire, etc" required><br><br>

			Attack: <input type="number" name="attack" placeholder="Attacking skills" required><br><br>

			Defense: <input type="number" name="defense" placeholder="Defensing skills" required><br><br>

			Level Of Evolve: <input type="number" name="level_of_evolve" placeholder="Upgradation" required><br><br>

			Description: <input type="text" name="description" placeholder="Details" required><br><br>

			Image: <input type="file" src=""name="image" width="1000", height="1000" required><br><br>

			<button type="submit" name="submit">Get Into the Pokeball</button>
		</form>

		

	</body>
</html>