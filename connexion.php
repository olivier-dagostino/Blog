<?php require 'header.php';?>
<main>
    <div class="first">
        <div class="form-connexion">
            <h2><strong>Log In</strong></h2>
            <form id="form-connexion" action="post">
                <label for="login">Login</label>
                <input type="login" name="login" type="text" placeholder="Login" required >
                <label for="password">Mot de Passe</label>
                <input type="password" placeholder="Mot de Passe" requried >
                <input type="submit" value="Envoyer" name="submit">
            </form>
        </div>
    </div>
</main>
<?php require 'footer.php'; ?>