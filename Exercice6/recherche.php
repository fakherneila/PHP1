<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche d'un film</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
        header { background: #1e3a8a; color: white; padding: 20px; text-align: center; }
        h1 { margin: 0; }
        .container { width: 600px; margin: 40px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        input[type=text] { width: 100%; padding: 12px; font-size: 16px; border: 2px solid #ccc; border-radius: 6px; margin-bottom: 20px; }
        input[type=submit] { background: #1e3a8a; color: white; padding: 12px 30px; border: none; border-radius: 6px; font-size: 16px; cursor: pointer; }
        input[type=submit]:hover { background: #1e40af; }
        .resultat { margin-top: 30px; padding: 20px; background: #f0f8ff; border-left: 5px solid #1e3a8a; }
        code { background: #eee; padding: 10px 15px; display: block; margin-top: 15px; border-radius: 5px; font-size: 15px; }
    </style>
</head>
<body>

<header>
    <h1>FIA2 ISSATS Sousse</h1>
    <p>TP PHP : Extern php File</p>
</header>

<div class="container">
    <h2 style="text-align:center;">Recherche d'un film</h2>

    <form method="post" action="">
        <input type="text" name="titre" placeholder="Entrez le titre du film" required>
        <div style="text-align:center;">
            <input type="submit" value="Rechercher">
        </div>
    </form>

    <?php
    
    require_once 'bibli.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titre_recherche = htmlspecialchars(trim($_POST['titre']));

        echo "<div class='resultat'>";
        echo "<h3>Merci de votre saisie !</h3>";
        echo "<p>J'ai reçu les valeurs suivantes :</p>";
        echo "<ul>";
        echo "<li><strong>le titre</strong> : <span style='color:#d4380d;'>$titre_recherche</span></li>";
        echo "</ul>";


        $sql = "SELECT * FROM films WHERE titre LIKE '%$titre_recherche%'";

        echo "<p>L'insertion à la base de données sera faite dans ultérieurement :</p>";
        echo "<code>$sql</code>";
        echo "</div>";

    }
    ?>
</div>

</body>
</html>