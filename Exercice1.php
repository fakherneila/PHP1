<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exercice 1 – Nom et version du navigateur</h1>
    <?php
    $ua = $_SERVER['HTTP_USER_AGENT'] ?? 'Inconnu';

    if (str_contains($ua, 'Edg/')) {
        preg_match('/Edg\/([\d.]+)/', $ua, $m);
        $nav = 'Microsoft Edge';
        $ver = $m[1] ?? '?';
    } elseif (str_contains($ua, 'Chrome')) {
        preg_match('/Chrome\/([\d.]+)/', $ua, $m);
        $nav = 'Google Chrome';
        $ver = $m[1] ?? '?';
    } elseif (str_contains($ua, 'Firefox')) {
        preg_match('/Firefox\/([\d.]+)/', $ua, $m);
        $nav = 'Mozilla Firefox';
        $ver = $m[1] ?? '?';
    } else {
        $nav = 'Autre navigateur';
        $ver = '?';
    }

    echo "<p>Nom du navigateur : <strong>$nav</strong></p>";
    echo "<p>Version : <strong>$ver</strong></p>";
    ?>
</body>
</html>