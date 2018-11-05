<?php

// Exercice 1 : création d'un fichier compteur de page
// Créer un fichier texte qui stocke le nombre de fois
// qu'une page a été vue.  

$file = fopen("compteur.txt" , "r+");
$nbvue = fgets($file);
if($nbvue == "") {$nbvue = 0 ;}

$nbvue++ ;

fseek($file , 0);
fputs($file , $nbvue);
fclose($file);

echo "La page à été vue " . $nbvue . " fois";


