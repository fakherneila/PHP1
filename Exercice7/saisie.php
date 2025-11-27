<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - Saisie</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 80px; background: #f9f9f9; }
        h1 { color: #2c3e50; }
        form { background: white; padding: 40px; width: 400px; margin: 0 auto; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); }
        label { display: block; margin: 15px 0 8px; font-weight: bold; text-align: left; }
        input[type=text], input[type=number] {
            width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 6px; font-size: 16px;
        }
        input[type=submit] {
            margin-top: 25px; background: #27ae60; color: white; padding: 12px 30px;
            border: none; border-radius: 6px; font-size: 18px; cursor: pointer;
        }
        input[type=submit]:hover { background: #219653; }
    </style>
</head>
<body>

<h1>Exercice 6</h1>
<h2>Saisie des informations</h2>

<form action="reception.php" method="get">
    <label>Nom d'utilisateur :</label>
    <input type="text" name="nom" required placeholder="Ex: Ahmed">

    <label>Âge :</label>
    <input type="number" name="age" min="1" max="120" required placeholder="Ex: 25">

    <input type="submit" value="Envoyer">
</form>

</body>
</html>