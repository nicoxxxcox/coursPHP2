<?php


// s'il y à un problème à l'ouverture du fichier
if(!$fp = fopen('texte.txt', "r") ){
    echo "Echec de l'ouverture du fichier";
}
// sinon on lit et on affiche le fichier
else{
    $fichier = "";

    while(!feof($fp)){
        $ligne = fgets($fp,144); // affiche 144 caractères 

        echo $ligne . '<br>';
    }

    fclose($fp);
}

