<?php
echo '<h3>Les nombres d\'armstrong inferieurs a 1000 sont:</h3>';
echo "<ul>";
for($i = 0; $i < 1000; $i++){
    $chiffres = str_split($i);
    $somme = 0;
    foreach($chiffres as $chiffre){
        $somme += pow($chiffre, 3);
    }
    if($somme === $i)
        echo "<li>$i</li>";
}
echo "</ul>"
?>