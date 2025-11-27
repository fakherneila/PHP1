<?php

require_once 'bibli.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $titre = htmlspecialchars(trim($_POST['titre']));
    $annee = (int)$_POST['annee'];


    $image = $_FILES['image'];
    $nomImage = "";

    if ($image['error'] == 0) {
        $nomImage = time() . "_" . basename($image['name']);
        $chemin = "uploads/" . $nomImage;
        move_uploaded_file($image['tmp_name'], $chemin);
    }


    ajouterLivre($titre, $annee, $nomImage);


    echo "<h2 style='text-align:center; color:green; margin-top:100px;'>
            Livre ajouté avec succès !<br><br>
            <a href='index.php'>← Retour au formulaire</a>
          </h2>";
} else {
    echo "Accès interdit.";
}
?>