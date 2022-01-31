<?php

/*
PDO::ATTR_DEFAULT_FETCH_MODE : Définit le mode de récupération par défaut

PDO::FETCH_OBJ : Spécifie que la méthode d'extraction doit renvoyer chaque ligne sous la forme d'un objet avec des noms de propriété 
                correspondant aux noms de colonne renvoyés dans le jeu de résultats.


*/
class User
{

    public $bdd = '';
    public $login = '';
    public $email = '';
    public $msg_error = '';
    public $msg_valid = '';

    //Crée la connexion à la base de donnée
    public function __construct($dbname)
    {
        $bdd = new PDO("mysql:host=localhost:8889;dbname=blog", 'root', 'root', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        try {

            $this->bdd = $bdd;

        } catch (PDOException $e) {

            $error = $e->getMessage();
            echo $error;

        }
    }

    //Ferme la connexion à la base de donnée
    public function __destruct()
    {
        
        $this->bdd = '';

    }

    //Vérifie que le login n'est pas déjà utilisé
    public function issetUser($login)
    {
        
        $query_issset_user = $this->bdd->query("SELECT * FROM utilisateurs WHERE login='$login'");
        $isset_user = $query_issset_user->fetch();

        return $isset_user;

    }
    

    //Insert les infos de l'utilisateur en base de données
    public function register($login, $password, $email)
    {
       
        $insert_user = $this->bdd->prepare("INSERT INTO utilisateurs (login, password, email) VALUES (:login, :password, :email)");
        $insert_user->execute([
            'login' => $login,
            'password' => $password,
            'email' => $email
        ]);
        exit;

    }

    //Créée une session["user"] et connecte l'utilisateur
    public function connect($login, $password)
    {
        if (!empty($this->issetUser($login))) {
            echo"1";
            if (password_verify($password, $this->issetUser($login)->password)) {
                
                $_SESSION["user"] = $this->issetUser($login);
                echo"2";
                header('location:index.php');
            } else
                echo "Mauvais mot de passe";
        } else
            echo  "Ce login n'existe pas";
    }

    //Met à jour les données de l'utilisateur en base de données
    public function updateUser($login, $email, $id, $newpw = '', $confpw = '')
    {
        //Met à jour le login en base de données
        if (empty($this->issetUser($login)) || $login == $_SESSION["user"]->login) {
            $this->login = $login;
        } else {
            $this->msg_error = "Ce login est déjà prit";
        }
        //Met à jour l'email en base de données
        if (empty($this->issetUser($email)) || $email == $_SESSION["user"]->email) {
            $this->email = $email;
        } else {
            $this->msg_error = "Cet email existe déjà";
        }
        //Met à jour le password de l'utilisateur en base de données
        if (isset($newpw) && !empty($newpw)) {
            if ($newpw == $confpw) {
                $hash_nw_password = password_hash($newpw, PASSWORD_DEFAULT);

                $update_password = $this->bdd->prepare("UPDATE utilisateurs SET password=? WHERE id=?");
                $update_password->execute([
                    $hash_nw_password,
                    $id
                ]);
                $_SESSION["user"]->password = $hash_nw_password;
            } else {
                $this->msg_error = "Les mots de passe ne correspondent pas";
            }
        }
        //Met à jour le login et l'email de l'utilisateur en base de données
        if (empty($this->msg_error)) {
            $update = $this->bdd->prepare("UPDATE utilisateurs SET login=?, email=? WHERE id=?");
            $update->execute([
                $this->login,
                $this->email,
                $id
            ]);
            $_SESSION["user"]->login = $this->login;
            $_SESSION["user"]->email = $this->email;

            $this->msg_valid = "Modification(s) prise(nt) en compte";
        }
    }
}
