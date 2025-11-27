<?php
session_start(); // TRÈS IMPORTANT : sans ça, $_SESSION est vide !
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 10 - Page 2</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 80px; background: #e8f5e8; }
        .box { width: 500px; margin: 0 auto; background: white; padding: 40px; border-radius: 15px; box-shadow: 0 0 20px rgba(0,0,0,0.1); }
        .valeur { font-size: 28px; color: #27ae60; font-weight: bold; }
        a { color: #e74c3c; }
    </style>
</head>
<body>

<div class="box">
    <h1>Page 2 - Lecture de la session</h1>

    <?php
    // On vérifie que les variables existent
    if (isset($_SESSION['prenom']) && isset($_SESSION['age'])) {
        echo "<p>Bonjour <span class='valeur'>" . $_SESSION['prenom'] . "</span> !</p>";
        echo "<p>Vous avez <span class='valeur'>" . $_SESSION['age'] . " ans</span>.</p>";
    } else {
        echo "<p style='color:red;'>Aucune donnée de session trouvée !</p>";
        echo "<p>Vous avez oublié <code>session_start();</code> ou vous n'êtes pas passé par la page 1.</p>";
    }
    ?>

    <p><a href="page1.php">← Retour à la page 1</a></p>
    <p><a href="deconnexion.php" style="color:#e74c3c;">Se déconnecter (detruire la session)</a></p>
</div>

</body>
</html>