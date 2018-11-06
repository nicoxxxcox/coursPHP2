<?php

include 'PersonneSet.class.php';



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
        
        
        <h2>J'instancie l'objet PersonneSet</h2>
        <?php

        $nico = new PersonneSet();
        
        $nico->nom = "Nicolas";
        echo $nico->nom;

        ?>

        <h2>Je lance le destructeur</h2>
        <?php

        unset($nico);
       
        
        ?>        




    </div>    
</body>
</html>