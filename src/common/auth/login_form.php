<center>
    <a href="/" class="brandstyle">Booklet</a>
    <h2>Connexion</h2>
    <form method="post" action="/backend/auth/process_login.php">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>
    <p><a href="/signup.php">Problèmes de connexion ?</a></p>
    <p>Pas encore inscrit ? <a href="/signup.php">Rejoignez nous !</a></p>
</center>