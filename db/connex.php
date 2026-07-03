<?php

// Affichage des  erreurs (développement)
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Connexion à la base de données
// Remplacer VOTRE_MOT_DE_PASSE par le mot de passe MySQL local.
$connex = mysqli_connect("127.0.0.1", "root", "VOTRE_MOT_DE_PASSE", "forum_db", 3306);

// Vérifie si la connexion a échoué
if(!$connex){
    echo "Fail to connect ".mysqli_connect_error();
    exit();
}

// Définit l'encodage des caractères
mysqli_set_charset($connex, "utf8mb4");

?>



