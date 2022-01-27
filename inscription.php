<?php require 'header.php'; ?>


<?php
include 'php/traitement/traitement-inscription.php';
require 'php/include/conn_bdd.php';


?>
<main>
    <div class="first-I">
        <div class="form-inscription">
            <h2>Formulaire d'Inscription</h2>
            <form id="form-inscription" action="POST">
                <div class="form-inscription-1">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="login" placeholder="Login" required>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="email" required>
                </div>
                <div class="form-inscription-3">
                    <label for="password">Mot de Passe</label>
                    <input type="password" name="password" id="password" placeholder="Password" required><br>
                    <label for="confpw">Mot de Passe</label>
                    <input type="password" name="confpw" id="confpw" placeholder="Mot de Passe" required>
                </div>
                <div class="form-inscription-4">
                    <center><input type="submit" name="submit" class="submit"></center>
                    <?php if (isset($msg_error)) {
                        echo '<p class="alert alert-danger w-75 p-3 m-auto text-center">' . $msg_error . '</p>';
                    } ?></p>

                </div>
            </form>
        </div>
    </div>
</main>
<?php require 'footer.php'; ?>