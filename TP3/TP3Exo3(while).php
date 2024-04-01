<?php

// Génération du nombre aléatoire à trois chiffres
$N = rand(100, 999);
$tirageAleatoire = rand(100, 999);
$compteur = 1;

// Boucle while pour générer des nombres aléatoires jusqu'à obtenir le nombre initial
while ($N !== $tirageAleatoire) {
  $N = rand(100, 999);
  $compteur++;
}

// Affichage du nombre d'essais
echo "Nombre d'essais : $compteur\n";

?>