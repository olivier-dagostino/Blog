<?php

function connexionPDO()
{
    try {
        $bdd = new PDO('mysql:host=localhost:8889;dbname=blog;', 'root', 'root');
    } catch (PDOException $e) {
        echo 'Échec de la connexion : ' . $e->getMessage();
        exit;
    }
    return $bdd;
}
