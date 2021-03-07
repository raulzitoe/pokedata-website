<?php

	include_once "db_connection.php";

//Post is a global variable and it sends the data from the Index file to the admin file. 
	$id = $_POST['uid'];
	$name= $_POST['name'];
	$type= $_POST['type'];
	$attack= $_POST['attack'];
	$defense= $_POST['defense'];
	$level_of_evolve= $_POST['level_of_evolve'];
	$description= $_POST['description'];
	// $image= $_POST['image'];

	$image  =   addslashes(file_get_contents($_FILES['image']['tmp_name']));

	// Making sure no data should go empty in the database

	if (!empty($id) || !empty($name) || !empty($type) || !empty($attack) ||!empty($defense) || !empty($level_of_evolve) || !empty($description)){

		// Querry of Insertion

		$query = "INSERT INTO pokemons (id, poke_name, type, attack, defense, level_of_evolve, description, image) VALUES ('$id','$name','$type','$attack','$defense','$level_of_evolve','$description', '$image');";
		mysqli_query($conn, $query);

	}
	// If no then. This is just the server site validation
	else{
		echo "All fields are required";
		die();
	}



		//After the insertion of data through submit button. It will not leave the page. So we need to set location that will switch user back to the form page)
		header("Location: ./Index.php");

	?>