<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/style/index.css">
	<title>booklet - la bibliothèque sociale</title>
</head>

<body>
	<?php include '/src/common/navbar.php';?>
	<div class="separator"></div>
	<?php include 'elements/home/personal_feed.php';?>
	<div class="separator"></div>
</body>

</html>