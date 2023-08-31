<?php
session_start();
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=booklet', 'root', 'root');

if(isset($_POST['username']) && isset($_POST['password'])){
    $nom_utilisateur = $_POST['username'];
    $mot_de_passe = $_POST['password'];

    // Vérification des informations de connexion
    $query = $bdd->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $query->execute(array(':username' => $nom_utilisateur, ':password' => $mot_de_passe));
    $user = $query->fetch();

    if($user){
        // Authentification réussie
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: /index.php"); // Rediriger vers la page d'accueil après la connexion
    } else {
        // Authentification échouée
        header("Location: /login.php"); // Rediriger vers la page d'accueil après la connexion
        exit();
    }
}
?>