<?php 


require 'header.php';
include 'php/traitement/traitement-connexion.php'; 
include 'php/include/conn_bdd.php'; 

?>
<main>
    <div class="first">
        <div class="form-connexion">
            <h2><strong>Log In</strong></h2>
            <form id="form-connexion" action="" method="POST">
                <label for="login">Login</label>
                <input type="login" name="login" type="text" placeholder="Login" required >
                <label for="password">Mot de Passe</label>
                <input type="password" placeholder="Mot de Passe" requried >
                <input type="submit" value="Envoyer" name="submit-co">
            </form>
        </div>
    </div>
</main>
<?php require 'footer.php'; ?>