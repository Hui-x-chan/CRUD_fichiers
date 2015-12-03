<?php

if (!file_exists("liste_de_prenom.txt")) {
    $prenom = [ "Duchaine", "Duch", "DK"];
    $handle = fopen("liste_de_prenom.txt", "a");

    foreach ($prenom as $prenom) {
        fputs($handle, $prenom);
    }
    
    fclose($handle);
    
}

$handle = fopen("liste_de_prenom.txt", "r");

while ($prenom = fgetc($handle)) {
    echo "bonjour" . $prenom . "<br/>";
}
fclose($handle);
