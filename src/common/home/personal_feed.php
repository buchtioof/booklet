<?php
if(isset($_SESSION["id"])){ // If user logged in, show personalized feed
    $nom_utilisateur = $_SESSION["username"];
    echo "
    <div class='welcome'>
        <p>MON FIL</p>
        <h1 class='brandstyle'>Bonjour, "; echo $nom_utilisateur; echo " !</h1>
    </div>
    ";}

else{
    echo "
    <div class='welcome'>
        <center>
            <object type='image/svg+xml' data='/images/glassboy.svg'></object>
            <div class='sepa2' style='padding-bottom:1%;'></div>
            <h1>Lire, Partager, Découvrir</h1>
            <div class='sepa2' style='padding-bottom:1%;'></div>
            <p class='speech'>Créez votre bibliothèque en ligne et <br>partagez vos lectures avec la communauté.</p>
            <div class='sepa2' style='padding-bottom:1%;'></div>
            <a href='signup.php'><button class='startbtn'>Commencer maintenant !</button></a>
        </center>
    </div>
";}
?>