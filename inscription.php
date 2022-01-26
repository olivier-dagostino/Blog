<?php require 'header.php'; ?>
<main>
    <div class="first">
        <div class="form-inscription">
            <h2>Formulaire d'Inscription</h2>
            <form id="form-inscription" action="post">
                <label for="login">Login</label>
                <input  type="text" name="login" id="login" placeholder="Login">
                <label for="prenom">Prénom</label>
                <input  name="prenom" type="text" placeholder="Prenom" />
                <label for="nom">Nom</label>
                <input  name="nom" type="text" placeholder="Nom" />
                <label for="password">Mot de Passe</label>
                <input  type="password" name="password" id="password" placeholder="Password">
                <label for="confpw">Confirmation Mot de Passe</label>
                <input type="password" name="confpw" id="confpw" placeholder="Confirmer votre Password">
                <input  type="submit" value="S'inscrire" name="inscription" class="submit">
            </form>
        </div>
    </div>
</main>
<?php require 'footer.php'; ?>