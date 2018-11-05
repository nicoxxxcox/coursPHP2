
<!--

Exercice 2 : La lotterie

Créez  une  loterie  en  ligne  en  enregistrant  le  numér
o  gagnant  dans  un  fichier  texte.  Le 
visiteur  saisit  sa  proposition  dans  un  formulaire, 
et  la  réponse  est  affichée  après 
comparaison avec la solution. 
Créez d'abord le fichier texte nommé "gagnant.txt" 
contenant le numéro gagnant avec un 
éditeur de texte (blocnotes, notepad)et placez le d
ans le même répertoire que le fichier PHP 
traitement.php 
-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="fichiers_exo2.php" method="post">
 <input type="text" placeholder="Donnez votre numéro à 3 chiffres" name="nb" maxlength="3"   minlength="3" id="">
 <br/>
 <button type="submit">Essayer</button>
</form>

<?php


if(isset($_POST['nb'])){
    
    $file = fopen("gagnant.txt", "r" );
    $gagnant = fread($file , 3);

    if($gagnant==($_POST['nb']))
    {
        echo 'VOUS AVEZ GAGNE LE GROS LOT' ;
    
    } else { echo 'VOUS AVEZ PERDU' ;
    
        }


}

?>

    
</body>
</html> 





