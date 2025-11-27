<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Formulaire complet</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; }
        h2 { text-align: center; color: #333; }
        label { font-weight: bold; }
        input[type=text], input[type=email], select, textarea {
            width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;
        }
        .radio, .checkbox { margin: 10px 0; }
        textarea { height: 100px; resize: vertical; }
        input[type=submit], input[type=reset] {
            padding: 10px 20px; margin-right: 10px; cursor: pointer;
        }
        input[type=submit] { background: #3498db; color: white; border: none; }
        input[type=reset]  { background: #95a5a6; color: white; border: none; }
    </style>
</head>
<body>

<h2>Vos coordonnées</h2>

<form action="cible.php" method="post" enctype="multipart/form-data">

    <label>Nom :</label>
    <input type="text" name="nom" placeholder="votre nom" required>

    <label>Prénom :</label>
    <input type="text" name="prenom" placeholder="votre prénom" required>

    <label>Mail :</label>
    <input type="email" name="mail" placeholder="votre mail" required>

    <label>Code :</label>
    <input type="text" name="code" placeholder="votre code" required>

    <label>Sexe :</label>
    <div class="radio">
        <input type="radio" name="sexe" value="Homme" id="h" checked>
        <label for="h">Homme</label><br>
        <input type="radio" name="sexe" value="Femme" id="f">
        <label for="f">Femme</label>
    </div>

    <label>Pays :</label>
    <select name="pays" required>
        <option value="">-- Choisissez --</option>
        <option value="Tunisie" selected>Tunisie</option>
        <option value="France">France</option>
        <option value="Algérie">Algérie</option>
        <option value="Maroc">Maroc</option>
        <option value="Autre">Autre</option>
    </select>

    <label>Vos goûts</label>
    <div class="checkbox">
        <input type="checkbox" name="gouts[]" value="Pommes" id="p">
        <label for="p">Pommes</label><br>
        <input type="checkbox" name="gouts[]" value="Poires" id="po">
        <label for="po">Poires</label><br>
        <input type="checkbox" name="gouts[]" value="Scoubidou" id="s">
        <label for="s">Scoubidou</label>
    </div>

    <label>Décrivez vos goûts en détail</label>
    <textarea name="details" placeholder="Écrivez ici..."></textarea>

    <label>Envoyez nous votre photo</label>
    <input type="file" name="photo" accept="image/*">

    <br><br>
    <input type="reset" value="Effacer">
    <input type="submit" value="Envoyer">

</form>

</body>
</html>