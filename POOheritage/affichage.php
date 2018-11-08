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


$vehicule = new Vehicule("noir" , "1500");

$vehicule->rouler();


$vehicule->ajouter_personne(70);

echo "<br>";

echo $vehicule->poids . " kg est le poids du véhicule avec une personne de 70kg à l'interieur";

echo "<br>";

$voiture = new Voiture("verte" , "1400");
$voiture->ajouter_personne(130);
echo "Une voiture " . $voiture->couleur . " qui pèse avec deux personnes de 65 kg fait " . $voiture->poids . " kg";

echo "<br>";

echo "On repeint la voiture en rouge et on ajoute deux pneus neige" ;
$voiture->repeindre("rouge");
$voiture->ajouter_pneu_neige(2);

echo "<br>";

echo "Maintenant donc, la voiture est de couleur ". $voiture->couleur . " et est équipée de " . $voiture->nombre_pneu_neige  . " pneus neige.";

echo "<br>";

echo "On crée un objet deux_roue noir";

$moto = new Deux_roues("noir","120");
$moto->ajouter_personne(80);
$moto->mettre_essence(20);

echo "<br>";

echo "L'objet moto créé est de couleur " . $moto->couleur . " et son poids est de " . $moto->poids . " kg";

echo "<br>";

$camion = new Camion("bleu" , "10000");
$camion->longueur = 10;
$camion->nb_portes = 2;
$camion->ajouter_remorque(5);
$camion->ajouter_personne(80);


echo "<br>";

echo "L'objet camion créé est de couleur " . $camion->couleur . " et son poids est de " . $camion->poids . " kg et comporte " . $camion->nb_portes . " portes et meusure " . $camion->longueur . " m de long";

?>

</div>


    
</body>
</html>