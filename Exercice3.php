<?php
// Déclaration de plusieurs variables de types différents
$nomComplet   = "Fakher Ben Neila";     // string
$age          = 22;                     // integer
$taille       = 1.90;                   // float
$estEtudiant  = true;                   // boolean
$notes        = [15, 18, 17.5];         // array
$couleurPreferee = null;                // null

// Affichage clair et lisible
echo "<strong>=== Informations personnelles ===</strong><br>";
echo "Nom complet     : " . $nomComplet . "<br>";
echo "Âge             : " . $age . " ans<br>";
echo "Taille          : " . $taille . " m<br>";
echo "Est étudiant    : " . ($estEtudiant ? "Oui" : "Non") . "<br>";
echo "Notes           : " . implode(", ", $notes) . "<br>";
echo "Couleur préférée: " . ($couleurPreferee ?? "Non définie") . "<br><br>";
?>




<?php
//2. Déclarer 3 tableaux :
$tab_a[0] = "P"; $tab_a[1] = "H"; $tab_a[2] = "P"; $tab_a[3] = 8;
 $tab_b = array("P","H","P",8);
 $tab_c[] = "P"; $tab_c[] = "H"; $tab_c[] = "P"; $tab_c[] = 3; 



 //3. Afficher le type des tableaux  :
 echo "<strong>=== Types  des tableaux ===</strong><br>";
    echo "Type de tab_a : " . gettype($tab_a) . "<br>";
    echo "Type de tab_b : " . gettype($tab_b) . "<br>";
    echo "Type de tab_c : " . gettype($tab_c) . "<br>";
 //afficher la  case d'indice 1 des tableaux :
    echo "<br><strong>=== Première case des tableaux ===</strong><br>";
        echo "la case 1 de tab_a : " . $tab_a[1] . "<br>";
        echo "la case 1 de tab_b : " . $tab_b[1] . "<br>";
        echo "la case 1 de tab_c : " . $tab_c[1] . "<br>";
 ?>

<?php
//3. Déclarer un tableau d’entier donc chaque case d’indice i contient la valeur 2i afficher ensuite le
 //tableau. 
$tab_d = [];
for ($i = 0; $i < 10; $i++) {
    $tab_d[$i] = 2 * $i;
}   
//afficher le tableau
echo "<br><strong>=== Tableau des entiers 2i ===</strong><br>";
for ($i = 0; $i < count($tab_d); $i++) {    
    echo "Indice " . $i . " : " . $tab_d[$i] . "<br>";
}
?>

<?php
//4. Déclarer le tableau associatif suivant 
$email_a["Sofiene"] = "sofiene@issatso.rnu.tn";
 $email_a["Nizar"] = "nizar@issatso.rnu.tn";
  $email_a["Ahmed"] = "ahmed@issatso.rnu.tn";
 $email_a["Mounir"] = "mounir@issatso.rnu.tn"; 
//Proposer une deuxième méthode pour déclarer le tableau email_b (identique à email_a) 
$email_b = array(
    "Sofiene" => "sofiene@issatso.rnu.tn",
    "Nizar" => "nizar@issatso.rnu.tn",
    "Ahmed" => "ahmed@issatso.rnu.tn",
    "Mounir" => "mounir@issatso.rnu.tn"
);

//Afficher le tableau email_a :
echo "<br><strong>=== Tableau des emails ===</strong><br>";
echo "Email de Sofiene : " . $email_a["Sofiene"] . "<br>";
echo "Email de Nizar : " . $email_a["Nizar"] . "<br>";
echo "Email de Ahmed : " . $email_a["Ahmed"] . "<br>";
echo "Email de Mounir : " . $email_a["Mounir"] . "<br>";
//Afficher le tableau email_b :
echo "<br><strong>=== Tableau des emails (méthode 2) ===</strong><br>";
echo "Email de Sofiene : " . $email_b["Sofiene"] . "<br>";
echo "Email de Nizar : " . $email_b["Nizar"] . "<br>";
echo "Email de Ahmed : " . $email_b["Ahmed"] . "<br>";    
echo "Email de Mounir : " . $email_b["Mounir"] . "<br>";    
?>