<?php

$fichier = "bonjour.txt";

// ecriture
file_put_contents($fichier, "Duch\r\n");
file_put_contents($fichier, "Game", FILE_APPEND);

// lecture
$texte = file_get_contents($fichier);
echo $texte;


$handle = fopen("bonjour.txt", "r");
//var_dump($handle);

$car = fgetc($handle);
echo "Le premier caractère du fichier est $car";
fclose($handle);

// boucle de lecture
$handle = fopen("index.php", "r");
while (false !== ($char=fgetc($handle))) {
           echo $char . " ";
}
       fclose($handle);

       // boucle en lecture/ecriture
       $handle = fopen("bonjour.txt", "r+");
while ($char=fgetc($handle)) {
           //lire le premier caractere
           //écrire ce caractere puis ecrire un espace
           $texte .= $char . " ";
}
       fclose($handle);

file_put_contents($fichier, $texte);
