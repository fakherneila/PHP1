<?php
// Inclure le fichier bibli.php (obligatoire selon l'énoncé)
require_once 'bibli.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et nettoyage des données
    $titre = htmlspecialchars(trim($_POST['titre']));
    $annee = (int)$_POST['annee'];

    // Gestion de l'upload de l'image
    $image = $_FILES['image'];
    $nomImage = "";

    if ($image['error'] == 0) {
        $nomImage = time() . "_" . basename($image['name']);
        $chemin = "uploads/" . $nomImage;
        move_uploaded_file($image['tmp_name'], $chemin);
    }

    // Appel de la fonction d'ajout (suppose que tu as une fonction ajouterLivre() dans bibli.php)
    // Si tu n'as pas encore cette fonction, je te la donne juste après
    ajouterLivre($titre, $annee, $nomImage);

    // Message de succès + redirection pour éviter re-soumission
    echo "<h2 style='text-align:center; color:green; margin-top:100px;'>
            Livre ajouté avec succès !<br><br>
            <a href='index.php'>← Retour au formulaire</a>
          </h2>";
} else {
    echo "Accès interdit.";
}
?>