<?php
$nombre =[];
while (true) {
  $nombre[0] = rand(1,10);
  $nombre[1] = rand(1,10);
  $nombre[2] = rand(1,10);
  
  if ($nombre[0] % 2 === 0 && $nombre[1] % 2 === 0 && $nombre[2] % 2 === 1) {
    break;
  }
}

// Affichage des nombres
echo "Premier nombre : $nombre[0]<br>";

echo "Deuxième nombre : $nombre[1]<br>";
echo "Troisième nombre : $nombre[2]";

?>
