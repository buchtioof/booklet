<? session_start();?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/index.css">
    <link rel="stylesheet" href="/style/auth.css">
    <title>booklet - la bibliothèque sociale</title>
</head>

<body>
    <center>
        <a href="/" class="brandstyle">Booklet</a>
        <h1>Bon retour parmis nous !</h1>
        <div class="form">
            <form method="post" action="/backend/auth/process_login.php">
                <div class="input username">
                    <label for="username">Adresse mail / Identifiant</label><br>
                    <input type="text" name="username" required>
                </div>
                <div class="input password"> 
                    <label for="password">Mot de passe</label><br>
                    <input type="password" name="password" required>
                </div>
                <input type="submit" value="Se connecter">
            </form>
            
        </div>
        <?php if(!empty($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>
        <p><a href="/signup.php">Problèmes de connexion ?</a></p>
        <p>Pas encore inscrit ? <a href="/signup.php">Rejoignez nous !</a></p>
    </center>
</body>

</html>