
<!--

Exercice 3 : Calcul de la moyenne 

Créez un script en php  permettant de calculer la m
oyenne mensuelle des connexions sur le 
site en se servant du fichier connexions.txt . Ce d
ernier contient le nombre de connexions 
des  internautes  par  mois  sur  le  site  depuis  le  mois
  de  janvier  jusqu'au mois  de  décembre 
2014. 
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



<?php


    // on stocke gagnant.txt en mode r
    $file = fopen("connexions.txt", "r" );
    $connexions = fgets($file);

    $tableau = explode("/", $connexions);

    $moyenne = array_sum($tableau)/count($tableau);

    $message = $moyenne;

    fclose($file);
?>


<div class="message"> <p>La moyenne des connexions de l'année est : <?php echo $message ?> </p></div>

</div>
    
</body>
</html> 





