<?php

	include_once "db_connection.php";

	// Deleting data query...
	$query= "DELETE FROM pokemons WHERE id='$_GET[id]'"; 

	// if the deletion done successfull then refresh the page and send the user back to the Index page

	if(mysqli_query($conn, $query)){
		header("refresh:1; url= delete.php"); //referesh:1 here means it's going to 1second to return back to the Index page... 
	}
	else
	{
		echo "Not Deleted";
	}

?>
