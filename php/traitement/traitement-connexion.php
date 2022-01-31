<?php
    session_start();
    require_once '../class/class_user.php'; 
    
    $user = new user('blog');
    if(isset($_SESSION["user"]))
    {
        // header("Location:index.php");
        echo'connecter';

    }   else    {
        
        if(isset($_POST["submit-co"], $_POST["login"], $_POST["password"]) && 
        !empty($_POST["login"]) && !empty($_POST["password"]))
        {                              
            $login = $_POST["login"];
            $password = $_POST["password"];
            $user->connect($login, $password);   
            echo "connecté";
        }

    }

?>
