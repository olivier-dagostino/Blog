<?php
require './php/fonction/fonction.php';
$bdd = connexionPDO();

$categories = recuperation($bdd,'*','categories');

?>