<?php
include '../class/class_user.php';
echo"test";

$user = new User('blog');


    if (isset($_POST["submit-in"], $_POST["login"], $_POST["email"], $_POST["password"], $_POST["confpw"]) && !empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["confpw"]) && !empty($_POST["email"])) {
        $login = $_POST["login"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $email = $_POST["email"];
        if (empty($user->issetUser($login))) //Appel la fonction dans la classe user => vérifie que le login n'existe pas
        {
            if ($_POST["password"] == $_POST["confpw"]) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) //Vérifie que l'email est bien au format mail
                {
                    $user->register($login, $password, $email); //Insert l'utilisateur dans la BDD                                                            
                    header("Location:connexion.php");
                } else {
                    $msg_error = "email au mauvais format";
                }
            } else {
                $msg_error = "les mots de passe ne correspondent pas";
            }
        } else {
            $msg_error = "login déjà existant";
        }
    }
