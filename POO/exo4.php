<?php

include 'Ville.class.php';



?>



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
        
        
        <h2>J'instancie l'objet Nante</h2>
        <?php

        $nante = new Ville("Nante" , "Loire-Atlantique");
        echo $nante->affVilleInfos();

        ?>

        <h2>J'instancie l'objet Lyon</h2>
        <?php

        $lyon = new Ville("Lyon" , "Rhône");
        echo $lyon->affVilleInfos();

        ?>        




    </div>    
</body>
</html>