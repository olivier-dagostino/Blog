<?php
require './fonction/fonction.php';
$bdd = connexionPDO();
$categories = recuperation($bdd,'*','categories');

?>