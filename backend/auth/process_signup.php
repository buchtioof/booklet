<?php
session_start();
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=booklet', 'root', 'root');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $nom_utilisateur = htmlspecialchars($_POST['username']);
    $mot_de_passe = $_POST['password'];

    // Vérification si l'utilisateur existe déjà
    $check_query = $bdd->prepare("SELECT * FROM users WHERE username = :username");
    $check_query->execute(array(':username' => $nom_utilisateur));
    $existing_user = $check_query->fetch();

    if ($existing_user) {
        $_SESSION['error_message'] = "Ce nom d'utilisateur est déjà utilisé. Veuillez en choisir un autre.";
        header("Location: /signup.php"); // Rediriger vers la page d'inscription avec le message d'erreur
        exit();
    } else {
        // Hachage du mot de passe
        $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_BCRYPT);

        // Insérer les nouvelles informations d'utilisateur dans la base de données
        $insert_query = $bdd->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $insert_query->execute(array(':username' => $nom_utilisateur, ':password' => $mot_de_passe_hache));

        $_SESSION['success_message'] = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
        header("Location: /elements/signup/steps.php"); // Rediriger vers la page de connexion après l'inscription
        exit();
    }
}
?>
