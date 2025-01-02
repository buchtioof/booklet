<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=booklet', 'root', 'root');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $nom_utilisateur = htmlspecialchars($_POST['username']);
    $mot_de_passe = $_POST['password'];

    // Vérification des informations de connexion
    $query = $bdd->prepare("SELECT * FROM users WHERE username = :username");
    $query->execute(array(':username' => $nom_utilisateur));
    $user = $query->fetch();

    if ($user && password_verify($mot_de_passe, $user['password'])) {
        // Authentification réussie
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: /index.php");
        exit();
    } else {
        // Authentification échouée
        $_SESSION['error_message'] = "Nom d'utilisateur ou mot de passe incorrect.";
        header("Location: /login.php");
        exit();
    }
}
?>
