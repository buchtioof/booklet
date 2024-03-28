<center>
    <a href="/" class="brandstyle">Booklet</a>
    <h2>Inscription</h2>
    <form method="post" action="/backend/auth/process_signup.php">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="S'inscrire">
        <?echo $error_username?>
    </form>
    <p>Deja inscrit ? <a href="/login.php">Reprenons la ou nous en étions !</a></p>
</center>