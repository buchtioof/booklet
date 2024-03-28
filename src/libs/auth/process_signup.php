<?php 
session_start();
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=booklet', 'root', 'root');

if(isset($_POST['username']) && isset($_POST['password'])){
    $nom_utilisateur = $_POST['username'];
    $mot_de_passe = $_POST['password'];

    // Vérification si l'utilisateur existe déjà
    $check_query = $bdd->prepare("SELECT * FROM users WHERE username = :username");
    $check_query->execute(array(':username' => $nom_utilisateur));
    $existing_user = $check_query->fetch();

    if($existing_user){
        header("Location: /signup.php"); // Rediriger vers la page d'accueil après la connexion
    } else {
        // Insérer les nouvelles informations d'utilisateur dans la base de données
        $insert_query = $bdd->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $insert_query->execute(array(':username' => $nom_utilisateur, ':password' => $mot_de_passe));

        header("Location: /index.php"); // Rediriger vers la page d'accueil après la connexion
    }
}
?>