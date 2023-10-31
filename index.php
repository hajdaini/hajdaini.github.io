<?php

// Vérifie si la requête est une requête PUT
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {

    // Récupère le fichier
    $file = $_FILES['file'];

    // Vérifie si le fichier est valide
    if ($file['error'] == 0) {

        // Enregistre le fichier
        move_uploaded_file($file['tmp_name'], $file['name']);

        // Retourne le code de succès
        echo 200;
    } else {

        // Retourne le code d'erreur
        echo $file['error'];
    }
} else {

    // Retourne le code d'erreur
    echo 405;
}

?>
