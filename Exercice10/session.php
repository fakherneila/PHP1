<?php
session_start(); // Obligatoire au tout début

// On crée des variables de session
$_SESSION['prenom'] = 'Issats';
$_SESSION['age']    = 29;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 10 - Page 1</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 80px; background: #f0f8ff; }
        .box { width: 500px; margin: 0 auto; background: white; padding: 40px; border-radius: 15px; box-shadow: 0 0 20px rgba(0,0,0,0.1); }
        a { color: #3498db; font-size: 18px; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="box">
    <h1>Page 1 - Création de la session</h1>
    <p>Variables de session créées avec succès !</p>
    <p>
        <strong>Prénom :</strong> <?php echo $_SESSION['prenom']; ?><br>
        <strong>Âge :</strong> <?php echo $_SESSION['age']; ?> ans
    </p>
    <p><a href="page2.php">Aller à la page 2 →</a></p>
</div>

</body>
</html>