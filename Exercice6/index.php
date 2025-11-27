<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Simple</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 100px; }
        h1 { background: #007cba; color: white; padding: 20px; width: 50%; margin: 0 auto 40px; border-radius: 8px; }
        input[type=text], input[type=submit] {
            padding: 10px;
            font-size: 16px;
            margin: 10px;
        }
        input[type=submit] {
            background: #007cba;
            color: white;
            border: none;
            cursor: pointer;
            width: 100px;
        }
        input[type=submit]:hover { background: #005a87; }
        .resultat { margin-top: 30px; font-size: 18px; font-weight: bold; }
    </style>
</head>
<body>

<h1>Formulaire Simple</h1>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = htmlspecialchars($_POST['prenom']);
    echo "<div class='resultat'>Prénom : $prenom</div>";
}
?>

<form method="post" action="">
    ceci est un simple formulaire:<br><br>
    Prénom : <input type="text" name="prenom" required>
    <input type="submit" value="Envoyer">
</form>

</body>
</html>