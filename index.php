<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="/style/index.css">
	<title>booklet - la bibliothèque sociale</title>
</head>

<body>
	<?php include 'elements/navbar.php';?>
	<div class="separator"></div>
	<?php include 'elements/home/personal_feed.php';?>
	<div class="separator"></div>
</body>

</html>