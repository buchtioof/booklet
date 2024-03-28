<?php

	// Connect to database
	$con = mysqli_connect("localhost","root","root","bookDB");

	// Get all the courses from courses table
	// execute the query
	// Store the result
	$sql = "SELECT * FROM `songs` WHERE `status`=true";
	$dbquery = mysqli_query($con,$sql);
	$dbfetch = mysqli_fetch_all($dbquery,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Using internal/embedded css -->
	<style>
		body{
			margin: 0 24px;
		}

		.navbar {
			padding-bottom: 50px;
			display: flex;
			align-items: center;
		}

		.logo {
			width: 4%;
			border-radius: 1000px;
		}

		.btn {
			background-color: red;
			border: none;
			color: white;
			padding: 5px 5px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 20px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 20px;
		}

		.green {
			background-color: #199319;
		}

		.red {
			background-color: red;
		}

		.table{
			overflow-x: auto;
		}

		.album{
			width:7%;
		}

		table{
			text-align: left;
			width: 100%;
			border-collapse: collapse;
		}

		td,th {
			text-align: left;
		}
	</style>
</head>

<body>
	<div class="navbar">
		<img class="logo" src="https://i.pinimg.com/236x/ff/3e/b5/ff3eb566b2a46375932ff7094963af14.jpg?nii=t" />
		<div class="txtlogo">
			<a href="/">
				<h1>Spotihess</h1>
			</a>
			<p>The most goofiest bangers online !</p>
			<a href="liked.php">Favourites</a>
		</div>
	</div>
	<h2>Vos sons favoris</h2>
	<div class="table">
		<table>
			<!-- TABLE TOP ROW HEADINGS-->
			<tr>
				<th>#</th>
				<th>Song title</th>
				<th>Durée</th>
				<th>Favoris</th>
			</tr>
			<?php

			// Use foreach to access all the courses data
			foreach ($dbfetch as $database) { ?>
			<tr>
				<td><img class="album" src="<?php echo $database['img']; ?>"></td>
				<td><?php echo $database['name']; ?></td>
				<td><?php
						// Usage of if-else statement to translate the
						// tinyint status value into some common terms
						// 0-Inactive
						// 1-Active
						if($database['status']=="1")
							echo "Active";
						else
							echo "Inactive";
					?>
				</td>
				<td>
					<?php
					if($database['status']=="1")

						// if a course is active i.e. status is 1
						// the toggle button must be able to deactivate
						// we echo the hyperlink to the page "deactivate.php"
						// in order to make it look like a button
						// we use the appropriate css
						// red-deactivate
						// green- activate
						echo
"<a href=/deactivate.php?id=".$database['id']." class='btn red'>Retirer de vos favoris</a>";
					else
						echo
"<a href=/activate.php?id=".$database['id']." class='btn green'>Ajouter dans vos favoris</a>";
					?>
			</tr>
			<?php
				}
				// End the foreach loop
		?>
		</table>
	</div>
</body>

</html>