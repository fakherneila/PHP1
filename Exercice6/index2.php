<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau Livre</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background: #f0f8ff; }
        h1 { background: #006699; color: white; padding: 20px; width: 60%; margin: 0 auto 40px; border-radius: 8px; }
        form { background: white; padding: 30px; border-radius: 10px; width: 400px; margin: 0 auto; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        label { display: block; text-align: left; margin: 15px 0 5px; font-weight: bold; }
        input[type=text], input[type=number], input[type=file] {
            width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
        input[type=submit] {
            margin-top: 25px;
            background: #006699;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type=submit]:hover { background: #004d73; }
    </style>
</head>
<body>

<h1>Nouveau Livre</h1>

<form action="enreg.php" method="post" enctype="multipart/form-data">
    <label>Son titre :</label>
    <input type="text" name="titre" required>

    <label>Son année de sortie :</label>
    <input type="number" name="annee" min="1500" max="2025" required>

    <label>Son image :</label>
    <input type="file" name="image" required>

    <input type="submit" value="Enregistrer">
</form>

</body>
</html>