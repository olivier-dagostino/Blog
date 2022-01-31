<?php require_once 'php/include/header.inc.php';?>

<main>
    <div class="first-I">
        <div class="form-inscription">
            <h2>Formulaire d'Inscription</h2>
            <form id="form-inscription" action="php/traitement/traitement-inscription.php" method="POST">
                <div class="form-inscription-1">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="login" required>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="form-inscription-3">
                    <label for="password">Mot de Passe</label>
                    <input type="password" name="password" id="password" required><br>
                    <label for="confpw">Mot de Passe</label>
                    <input type="password" name="confpw" id="confpw" required>
                </div>
                <div class="form-inscription-4">
                    <center><input type="submit" name="submit-in" class="submit"></center></p>

                </div>
            </form>
        </div>
    </div>
</main>

<?php require 'php/include/footer.inc.php'; ?>