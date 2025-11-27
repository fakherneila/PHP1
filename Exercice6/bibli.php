<?php
// bibli.php

$livres = []; // tableau global ou chargé depuis un fichier JSON/base de données

function ajouterLivre($titre, $annee, $image) {
    global $livres;

    $livres[] = [
        'titre' => $titre,
        'annee' => $annee,
        'image' => $image
    ];

    // Optionnel : sauvegarder dans un fichier pour persistance
    file_put_contents('livres.json', json_encode($livres, JSON_PRETTY_PRINT));
}
?>