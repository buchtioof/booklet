<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/index.css">
    <link rel="stylesheet" href="/style/auth.css">
    <title>booklet</title>
</head>

<body>
        <header>
            <a href="/" class="brandstyle">Booklet</a>
        </header>
        <?php include 'elements/auth/front_signup.php';?>
</body>

</html>
