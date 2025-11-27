<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Historique des visites</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 60px; background: #f0f8ff; }
        .container { width: 700px; margin: 0 auto; background: white; padding: 40px; border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.15); }
        h1 { color: #2c3e50; }
        .visites { margin-top: 30px; text-align: left; background: #f8f9fa; padding: 20px; border-radius: 10px; }
        .visites ol { background: white; padding: 20px 40px; border: 1px solid #ddd; border-radius: 8px; }
        .visites li { padding: 8px 0; border-bottom: 1px dotted #ccc; }
        .visites li:last-child { border-bottom: none; }
        .nouvelle { color: #e74c3c; font-weight: bold; }
        .total { margin-top: 20px; font-size: 18px; color: #27ae60; }
    </style>
</head>
<body>

<div class="container">
    <h1>Exercice 9 – Historique complet des visites</h1>

    <?php
    $cookie_name = "historique_visites";
    $nouvelle_visite = date("d/m/Y à H:i:s");

    // Récupération de l'historique existant
    if (isset($_COOKIE[$cookie_name])) {
        
        $visites = json_decode($_COOKIE[$cookie_name], true);
        if (!is_array($visites)) $visites = [];
    } else {
        $visites = [];
    }

   
    array_unshift($visites, $nouvelle_visite);

    
    if (count($visites) > 50) {
        $visites = array_slice($visites, 0, 50);
    }


    setcookie($cookie_name, json_encode($visites), time() + 365*24*3600, "/");

    
    echo "<div class='visites'>";
    if (count($visites) == 1) {
        echo "<p>Bienvenue ! C'est votre <strong>première visite</strong> !</p>";
    } else {
        echo "<p>Vous êtes déjà venu <strong>" . (count($visites)-1) . " fois</strong> avant aujourd'hui.</p>";
    }

    echo "<p class='total'>Historique complet de vos visites :</p>";
    echo "<ol>";
    foreach ($visites as $index => $date) {
        if ($index == 0) {
            echo "<li class='nouvelle'>$date <em>(visite actuelle)</em></li>";
        } else {
            echo "<li>$date</li>";
        }
    }
    echo "</ol>";
    echo "</div>";
    ?>

    <p>Rafraîchissez la page pour ajouter une nouvelle visite à la liste !</p>
</div>

</body>
</html>