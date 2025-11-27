<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réception des données</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 100px; background: #ecf0f1; }
        .card { width: 500px; margin: 0 auto; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        h1 { color: #27ae60; }
        .info { font-size: 24px; margin: 20px 0; color: #2c3e50; }
        a { color: #3498db; text-decoration: none; font-size: 18px; }
        .erreur { color: #e74c3c; font-size: 20px; }
    </style>
</head>
<body>

<div class="card">
    <h1>Données reçues !</h1>

    <?php
   
    if (!empty($_GET)) {
        $nom = htmlspecialchars($_GET['nom'] ?? 'Inconnu');
        $age = htmlspecialchars($_GET['age'] ?? 'Non renseigné');

        echo "<p class='info'>Nom d'utilisateur : <strong>$nom</strong></p>";
        echo "<p class='info'>Âge : <strong>$age ans</strong></p>";
    } else {
        echo "<p class='erreur'>Aucune donnée reçue !</p>";
        echo "<p>Utilisez le formulaire pour envoyer des données.</p>";
    }
    ?>

    <p><a href="saisie.php">← Revenir au formulaire</a></p>
</div>

</body>
</html>