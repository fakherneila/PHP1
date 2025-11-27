// fichier php contenant deux fonctions  - function EnteteTitrePage ($titre) - function PiedDePage () 
<?php
function EnteteTitrePage($titre) {
    echo "<!DOCTYPE html>";
    echo "<html lang='fr'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>" . $titre . "</title>";
    echo "</head>";
    echo "<body>";
    echo "<h1>" . $titre . "</h1>"; 

}
function PiedDePage() {
    echo "<footer>";
    echo "<p>&copy; " . date("Y") . " Mon Site Web</p>";
    echo "</footer>";
    echo "</body>";
    echo "</html>";
}