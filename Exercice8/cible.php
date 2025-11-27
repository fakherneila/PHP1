<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat - Exercice 8</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 700px; margin: 50px auto; padding: 30px; background: #f8f9fa; }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        h1 { color: #27ae60; text-align: center; }
        p { font-size: 18px; margin: 15px 0; }
        strong { color: #2c3e50; }
        .gouts { background: #e8f5e8; padding: 15px; border-radius: 8px; }
        .photo { margin-top: 20px; text-align: center; }
        .photo img { max-width: 300px; border: 3px solid #3498db; border-radius: 10px; }
        a { margin-top: 30px; text-align: center; }
        a { color: #3498db; font-size: 18px; }
    </style>
</head>
<body>

<div class="card">
    <h1>Merci pour votre envoi !</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom    = htmlspecialchars($_POST['nom'] ?? '');
        $prenom = htmlspecialchars($_POST['prenom'] ?? '');
        $mail   = htmlspecialchars($_POST['mail'] ?? '');

        // Les goûts (checkbox → tableau)
        $gouts = $_POST['gouts'] ?? [];
        if (!is_array($gouts)) $gouts = [];

        echo "<p><strong>Nom :</strong> $nom</p>";
        echo "<p><strong>Prénom :</strong> $prenom</p>";
        echo "<p><strong>Mail :</strong> $mail</p>";

        echo "<div class='gouts'>";
        echo "<p><strong>Vos goûts :</strong><br>";
        if (!empty($gouts)) {
            echo implode(", ", $gouts);
        } else {
            echo "<i>Aucun goût sélectionné</i>";
        }
        echo "</p>";
        echo "</div>";

        // Gestion de la photo (optionnel mais propre)
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
            $dossier = "uploads/";
            if (!is_dir($dossier)) mkdir($dossier, 0777, true);
            $chemin = $dossier . time() . "_" . basename($_FILES['photo']['name']);
            move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
            echo "<div class='photo'>";
            echo "<p><strong>Votre photo :</strong></p>";
            echo "<img src='$chemin' alt='Photo envoyée'>";
            echo "</div>";
        }
    }
    ?>

    <p style="text-align:center; margin-top:40px;">
        <a href="index.php">← Revenir au formulaire</a>
    </p>
</div>

</body>
</html>