<?php

include_once "db_connection.php";

?>

<!DOCTYPE html>
<html>

<head>
	<title>Delete Pokemon from Database</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<table id="poke-table">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Type</th>
			<th>Attack</th>
			<th>Defense</th>
			<th>Evolve Level</th>
			<th>Description</th>
			<!-- <th>image</th> -->
			<th>Delete</th>
		</tr>
		<?php
		// Running the query for displaying the data
		$query = "SELECT * FROM pokemons";
		//connecting the querry to the database
		$run = mysqli_query($conn, $query);

		// fetching and storing the data's in the array
		while ($row = mysqli_fetch_array($run)) {
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['poke_name'] . "</td>";
			echo "<td>" . $row['type'] . "</td>";
			echo "<td>" . $row['attack'] . "</td>";
			echo "<td>" . $row['defense'] . "</td>";
			echo "<td>" . $row['level_of_evolve'] . "</td>";
			echo "<td>" . $row['description'] . "</td>";
			// echo "<td>".$row['image']."</td>";
			echo "<td><a href=delete_action.php?id=" . $row['id'] . ">Delete</a></td>"; //the primary key of our table is id. So, I'm refering "id" for deleting the whole row.  
		}
		?>
	</table>
	<div style="margin-left: 45%; margin-top: 50px;">
		<a href="index.php"><button id="btn-add-new">Back</button></a>
	</div>

</body>

</html>