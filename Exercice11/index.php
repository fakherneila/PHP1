<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=Livres;charset=utf8mb4", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h2 style='color:green'>Connexion réussie !</h2>";

    // Création table + données
    $pdo->exec("CREATE TABLE IF NOT EXISTS livre (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(255),
        annee INT
    )");

    $pdo->exec("INSERT IGNORE INTO livre (nom, annee) VALUES 
        ('Le Petit Prince', 1943),
        ('1984', 1949),
        ('Da Vinci Code', 2003),
        ('Harry Potter', 1997),
        ('L\'Alchimiste', 1988)");

    echo "<h3>Liste des livres :</h3><table border=1 cellpadding=10 cellspacing=0>
          <tr><th>ID</th><th>Nom</th><th>Année</th></tr>";
    foreach($pdo->query("SELECT * FROM livre") as $l) {
        echo "<tr><td>{$l['id']}</td><td>{$l['nom']}</td><td>{$l['annee']}</td></tr>";
    }
    echo "</table>";

} catch(Exception $e) {
    die("<span style='color:red'>Erreur : " . $e->getMessage() . "</span>");
}
?>