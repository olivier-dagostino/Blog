<?php require 'header.php';?>
<main>
    <div class="first">
        <div class="form-connexion">
            <h2>Log In</h2>
            <form id="form-connexion" action="post">
                <label name="login" type="text" placeholder="login"required >Login</label>
                <input type="login">
                <label type="password" placeholder="Mot de Passe" requried >Mot de Passe</label>
                <input type="login">
                <input type="submit" value="Envoyer" name="submit">
                <a id="pas-inscrit" href="inscription.php">Pas encore Inscrit ?</a>
            </form>
        </div>
    </div>
</main>
<?php require 'footer.php'; ?>