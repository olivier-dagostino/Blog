<?php require 'header.php'; ?>
<main>
    <div class="first-I">
        <div class="form-inscription">
            <h2>Formulaire d'Inscription</h2>
            <form id="form-inscription" action="post">
                <div class="form-inscription-1">
                    <label for="login">Login</label>
                    <input  type="text" name="login" id="login" placeholder="Login">
                </div>
                <div class="form-inscription-2">    
                    <label for="prenom">Prénom</label>
                    <input  name="prenom" type="text" placeholder="Prenom" />
                    
                    <label for="nom">Nom</label>
                    <input  name="nom" type="text" placeholder="Nom" />
                </div>
                <div class="form-inscription-3">
                    <label for="password">Mot de Passe</label>
                    <input  type="password" name="password" id="password" placeholder="Password"><br>
                    <label for="confpw">Mot de Passe</label>
                    <input type="password" name="confpw" id="confpw" placeholder="Mot de Passe">
                </div> 
                <div class="form-inscription-4">   
                    <center><input  type="submit" value="S'inscrire" name="inscription" class="submit"></center>
                </div>
            </form>
        </div>
    </div>
</main>
<?php require 'footer.php'; ?>