<?php

function connexionPDO() {
    try {
        $bdd = new PDO('mysql:host=localhost:8889;dbname=blog;','root','root');
    } catch (PDOException $e) {
        echo 'Échec de la connexion : ' . $e->getMessage();
        exit;
    }
    return $bdd;
} 

function recuperation($base,$selection,$table) {
    $requete = $base->prepare("SELECT $selection FROM $table" );
    $requete->execute();
    $resultat = $requete->fetchall();

    return $resultat ;
}

function recuperation_join($base,$table,$table2,$table_join1,$table_join2,$parametre2,$parametre3){
    $requete = $base->prepare("SELECT * FROM $table INNER JOIN $table2 ON $table_join1 = $table_join2 WHERE $parametre2 = ?");
    $requete->execute(array($parametre3));
    $resultat = $requete->fetchall();
    return $resultat;
}

?>