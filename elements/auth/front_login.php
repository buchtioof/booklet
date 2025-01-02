<main>
    <h1>Bon retour parmi nous !</h1>
    <form method="post" action="/backend/auth/process_login.php">
        <div class="form-group">
            <div class="form-input">
                <label for="username">
                    <h3>Identifiant</h3>
                </label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-input">
                <label for="password">
                    <h3>Mot de passe</h3>
                </label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit"><a class="btntxt">Connexion</a></button>
        </div>
        <?php if (!empty($_SESSION['error_message'])){ ?>
        <p class="error-message"><?php echo $_SESSION['error_message']; ?></p>
        <?php unset($_SESSION['error_message']);} ?>
        <a href="/forgot_password.php">Problèmes de connexion ?</a>
    </form>

    <div class="join">
        <h2>Pas encore sur Booklet ?</h2>
        <button>
            <a href="/signup.php" class="btntxt">Rejoindre Booklet</a>
        </button>
    </div>
</main>