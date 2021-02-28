<?php
	$dbserver ="localhost";
	
	// $dbuser = "root"; //Local
	// $dbp = ""; //Local
	// $dbName = "pokedata_database"; // Local
	
	$dbuser = "u515319970_raul"; //Website
	$dbName = "u515319970_pokedata"; // Website database
	$dbp = "Group8website"; //Website
	$conn = mysqli_connect($dbserver, $dbuser, $dbp, $dbName);

?>