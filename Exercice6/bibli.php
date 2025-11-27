<?php
// bibli.php

$livres = []; 

function ajouterLivre($titre, $annee, $image) {
    global $livres;

    $livres[] = [
        'titre' => $titre,
        'annee' => $annee,
        'image' => $image
    ];

    
    file_put_contents('livres.json', json_encode($livres, JSON_PRETTY_PRINT));
}
?>