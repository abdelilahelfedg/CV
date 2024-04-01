<?php

// Génération du nombre aléatoire à trois chiffres
$N = rand(100, 999);
$nombre = rand(100, 999);


// Boucle for pour générer des nombres aléatoires jusqu'à obtenir le nombre initial
for ($compteur=1; $N !== $nombre; $compteur++) {
    $N = rand(100, 999);
}

// Affichage du nombre d'essais
echo "Nombre d'essais : $compteur\n";

?>