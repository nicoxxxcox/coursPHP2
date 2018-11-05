
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

    <style>
    
    html, *{
        font-family : sans-serif ;
        box-sizing : border-box;
    }

    .container{
        border : 2px dashed;
        max-width : 960px;
        margin : 1rem auto;
        padding : 1rem;
    }

    input{
        border-radius : 5px;
        border : 1px solid #cacaca;
    }
    
    
    </style>
</head>
<body>

<div class="container">

<form action="fichiers_exo2.php" method="post">
 <input type="text" placeholder="Donnez votre numéro à 3 chiffres" name="nb" maxlength="3"   minlength="3" size="45">
 <br/>
 <button type="submit">Essayer</button>
</form>

<?php


if(isset($_POST['nb'])){
    // on stocke gagnant.txt en mode r
    $file = fopen("gagnant.txt", "r" );
    // on lit 3 caractères de gagnant.txt
    $gagnant = fread($file , 3);

    // si tout correspond on affiche le message correspondant
    if($gagnant==($_POST['nb']))
    {        
        
       $message = 'VOUS AVEZ GAGNE LE GROS LOT' ;
    
    } else { $message = 'VOUS AVEZ PERDU' ;
    
        }


}

?>


<div class="message"> <h1><?php echo $message ?> </h1></div>

</div>
    
</body>
</html> 





