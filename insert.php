<!-- <?php
		// include_once "databse_connection.php";

		?> -->

<!DOCTYPE html>
<html>

<head>
	<title>Inserting data's into Database</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>

	<div class="form-container">
		<div class="form-panel one">
			<div class="form-header">
				<h1>Add new Pokemon to Database</h1>
			</div>
			<div class="form-content">
				<form action="insert_action.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="uid">ID</label>
						<input type="number" name="uid" placeholder="Unique Id" required />
					</div>
					<div class="form-group">
						<label for="password">Pokemon</label>
						<input type="text" name="name" placeholder="Name" required />
					</div>
					<div class="form-group">
						<label for="password">Type</label>
						<input type="text" name="type" placeholder="Water, Flying, Fire, etc" required />
					</div>
					<div class="form-group">
						<label for="password">Attack</label>
						<input type="number" name="attack" placeholder="Attacking skills" required>
					</div>
					<div class="form-group">
						<label for="password">Defense</label>
						<input type="number" name="defense" placeholder="Defensing skills" required/>
					</div>
					<div class="form-group">
						<label for="password">Level of Evolve</label>
						<input type="number" name="level_of_evolve" placeholder="Upgradation" required/>
					</div>
					<div class="form-group">
						<label for="password">Description</label>
						<input type="text" name="description" placeholder="Details" required/>
					</div>
					<div class="form-group">
						<label for="password">Image</label>
						<input type="file" name="image" required/>
					</div>
					<div class="form-group">
						<button type="submit" name="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div style="text-align: center; margin:auto;">
		<a href="index.php"><button id="btn-add-new">Back</button></a>
	</div>








</body>

</html>