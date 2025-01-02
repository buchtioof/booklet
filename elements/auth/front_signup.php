<main>
    <div class="hello">
        <h1>Bienvenue chez nous !</h1>
        <h2>Tout d'abord, créeons votre compte</h2>
    </div>
    <form method="post" action="/backend/auth/process_signup.php">
        <div class="form-group">
            <label for="username">
                <h3>Identifiant</h3>
            </label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <div class="form-title">
                <label for="password">
                    <h3>Mot de passe</h3>
                </label>
                <div class="conditions">
                    <p>Un bon mot de passe doit contenir :</p>
                    <ul>
                        <li>Au moins 6 caractères</li>
                        <li>Une majuscule</li>
                        <li>Un nombre</li>
                        <li>Un caractère spécial (comme un gros mot de BD)</li>
                    </ul>
                </div>
            </div>


            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn"><a class="btntxt">Continuer</a></button>
        </div>
    </form>

    <!-- Affichage du message d'erreur -->
    <?php if (isset($_SESSION['error_message'])): ?>
    <p class="error-message"><?php echo htmlspecialchars($_SESSION['error_message']); ?></p>
    <?php unset($_SESSION['error_message']); ?>
    <?php endif; ?>

    <!-- Affichage du message de succès -->
    <?php if (isset($_SESSION['success_message'])): ?>
    <p class="success-message"><?php echo htmlspecialchars($_SESSION['success_message']); ?></p>
    <?php unset($_SESSION['success_message']); ?>
    <?php endif; ?>

    <div class="join">
        <h2>Deja sur Booklet ?</h2>
        <button>
            <a href="/login.php" class="btntxt">Se connecter</a>
        </button>
    </div>
</main>