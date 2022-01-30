<?php 
session_start();
include 'php/include/conn_bdd.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Le Blog du Ciotadens</title>
</head>
<body>
    <header>
        <?php
            if (isset($_SESSION['user']->id)) { /*utilisateursΛ*/
                echo '
                    <nav>
                        <label for="menu-mobile" class="menu-mobile">Menu</label>
                        <input type="checkbox" id="menu-mobile" role="button">
                        <ul>
                            <li class="menu-home"><a href="index.php">Accueil</a></li>
                            <li class="menu-log"><a href="connexion.php">Connexion</a></li>
                            <li class="menu-sign"><a href="inscription.php">Inscription</a></li>
                            <li class="menu-cat"><a href="categories.php">Catégories</a>
                                <ul class="submenu">
                                    <li><a href="#">Histoire de la ville </a></li>
                                    <li><a href="#">Berceau du Cinéma</a></li>
                                    <li><a href="#">Le Chantier Naval</a></li>
                                    <li><a href="#">Le Parc National des Calanques</a></li>
                                </ul>  
                            </li>
                            <li class="menu-profil"><a href="#">Profil</a></li>
                                <ul class="submenu">
                                    <li><a href="#">Modifier Mon Profil</a></li>
                                </ul>
                            <li class="menu-cat"><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                ';
                } elseif($_SESSION['user']->id_droits == 1337) { /*Admin*/
                
                    echo '
                        <nav>
                            <label for="menu-mobile" class="menu-mobile">Menu</label>
                            <input type="checkbox" id="menu-mobile" role="button">
                            <ul>
                                <li class="menu-home"><a href="index.php">Accueil</a></li>
                                <li class="menu-log"><a href="deconnexion.php">Déconnexion</a></li>
                                <li class="menu-cat"><a href="#">Catégories</a>
                                    <ul class="submenu">
                                        <li><a href="#">Histoire de la ville </a></li>
                                        <li><a href="#">Berceau du Cinéma</a></li>
                                        <li><a href="#">Le Chantier Naval</a></li>
                                        <li><a href="#">Le Parc National des Calanques</a></li>
                                    </ul>  
                                </li>
                                <li class="menu-edit"><a href="#">Edition</a>
                                    <ul class="submenu">
                                        <li><a href="#">Gestion des Articles</a></li> /*Ajout, modification, suppression d\'articles*/
                                        <li><a href="#">Gestion des Catégories</a></li> /*Ajout, modification, suppression de catégories*/ 
                                    </ul>
                                </li>
                                <li class="menu-admin"><a href="#">Admin</a>
                                    <ul class="submenu">
                                        <li><a href="#">Gestion des utilisateurs</a></li>
                                    </ul>
                                </li>
                                <li class="menu-cat"><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    ';
                
                } elseif ($_SESSION["user"]->id_droits  == 42) { /* Modérateur*/
                    echo'
                        <nav>
                            <label for="menu-mobile" class="menu-mobile">Menu</label>
                            <input type="checkbox" id="menu-mobile" role="button">
                            <ul>
                                <li class="menu-home"><a href="index.php">Accueil</a></li>
                                <li class="menu-log"><a href="connexion.php">Connexion</a>
                                <li class="menu-sign"><a href="inscription.php">Inscription</a></li>
                                <li class="menu-cat"><a href="categories.php">Catégories</a>
                                    <ul class="submenu">
                                        <li><a href="#">Histoire de la ville </a></li>
                                        <li><a href="#">Berceau du Cinéma</a></li>
                                        <li><a href="#">Le Chantier Naval</a></li>
                                        <li><a href="#">Le Parc National des Calanques</a></li>
                                    </ul>  
                                </li>
                                <li class="menu-edit"><a href="#">Edition</a>
                                    <ul class="submenu">
                                        <li><a href="#">Modifier Mon Profil</a></li>
                                        <li><a href="#">Rédiger un article</a></li>
                                        <li><a href="#">Mes articles</a></li> 
                                    </ul>
                                </li>
                                <li class="menu-cat"><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    ';
                }else{
                    echo '
                    <nav>
                        <label for="menu-mobile" class="menu-mobile">Menu</label>
                        <input type="checkbox" id="menu-mobile" role="button">
                        <ul>
                            <li class="menu-home"><a href="index.php">Accueil</a></li>
                            <li class="menu-log"><a href="connexion.php">Connexion</a></li>
                            <li class="menu-sign"><a href="inscription.php">Inscription</a></li>
                            <li class="menu-cat"><a href="categories.php">Catégories</a>
                                <ul class="submenu">
                                    <li><a href="#">Histoire de la ville </a></li>
                                    <li><a href="#">Berceau du Cinéma</a></li>
                                    <li><a href="#">Le Chantier Naval</a></li>
                                    <li><a href="#">Le Parc National des Calanques</a></li>
                                </ul>  
                            </li>
                            <li class="menu-cat"><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                ';
                }

        ?>
        <?php if (isset($_SESSION['erreur'])) { echo $_SESSION['erreur']; } ?>
    </header>
