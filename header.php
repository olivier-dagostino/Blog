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
        
            if (!empty($_SESSION["id"])) {
                echo '
                    <nav>
                        <label for="menu-mobile" class="menu-mobile">Menu</label> <!-- Case à cocher -->
                        <input type="checkbox" id="menu-mobile" role="button"> <!-- Case à cocher -->
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
                                    <li><a href="#">Berceau du Cinéma</a></li>
                                    <li><a href="#">Le Chantier Naval</a></li>
                                    <li><a href="#">Le Parc National des Calanques</a></li>  
                                </ul>
                            </li>
                            <li class="menu-cat"><a href="#">Contact</a>
                        </ul>
                    </nav>
                ';
                } else {
                    echo '
                        <nav>
                            <label for="menu-mobile" class="menu-mobile">Menu</label> <!-- Case à cocher -->
                            <input type="checkbox" id="menu-mobile" role="button"> <!-- Case à cocher -->
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
                                <li class="menu-cat"><a href="#">Contact</a>
                            </ul>
                        </nav>
                    ';
                
            }
        ?>
    </header>
