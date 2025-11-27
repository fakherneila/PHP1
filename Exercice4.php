<?php

//1. Ecrire un scripte PHP qui permet de comparer deux variables et afficher celle la plus grande.
$a = 10;
$b = 20;
if ($a > $b) {
    echo "La variable a est plus grande que la variable b : a = $a";
} elseif ($b > $a) {
    echo "La variable b est plus grande que la variable a : b = $b";
} else {
    echo "Les deux variables sont égales : a = b = $a";
} 
//2. Ecrire un scripte PHP qui permet de compter de 0 à 10. 
echo "<br><strong>=== Compte de 0 à 10 ===</strong><br>";
for ($i = 0; $i <= 10; $i++) {
    echo "<br>";
    echo $i . " ";

}

//3. Afficher le contenu du tableau email_a en utilisant la boucle foreach puis la boucle while. 
$email_a["Sofiene"] = "sofiene@issatso.rnu.tn";
 $email_a["Nizar"] = "nizar@issatso.rnu.tn";
  $email_a["Ahmed"] = "ahmed@issatso.rnu.tn";
 $email_a["Mounir"] = "mounir@issatso.rnu.tn";
//Affichage avec foreach
echo "<br><strong>=== Affichage avec foreach ===</strong><br>";
foreach ($email_a as $name => $email) {
    echo "Nom : " . $name . " - Email : " . $email . "<br>";
}
//Affichage avec while
echo "<br><strong>=== Affichage avec while ===</strong><br>";
$i = 0;
while ($i < count($email_a)) {
    $name = array_keys($email_a)[$i];
    $email = $email_a[$name];
    echo "Nom : " . $name . " - Email : " . $email . "<br>";
    $i++;
}
//4. Ecrire un scripte PHP permettant d’afficher la table de multiplication.
echo "<br><strong>=== Table de multiplication complet ===</strong><br>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo $i . " x " . $j . " = " . ($i * $j) . "<br>";
    }
    echo "<br>";
}



?>