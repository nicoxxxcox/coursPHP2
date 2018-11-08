<?php

   // include_once 'Vehicule.class.php';
    include_once 'Voiture.class.php';

    include_once 'Deux_roues.class.php';

    include_once 'Camion.class.php';

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

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
<body>

<div class="container">

<?php

$moto = new Deux_roues("rouge" , 150);
$moto->ajouter_personne(70);
$moto->couleur= "vert" ;

Vehicule::afficher_attribut($moto);

$moto->couleur= "vert" ;
$moto->cylindree= "1000" ;
Vehicule::afficher_attribut($moto);

$camion = new Camion("blanc" , 6000);
$camion->ajouter_personne(84);
$camion->repeindre("bleu");
$camion->nb_portes = 2 ;
Vehicule::afficher_attribut($camion);

$voiture = new Voiture("violet" , 1400 , 5);

    

?>

</div>


    
</body>
</html>