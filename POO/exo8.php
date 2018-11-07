<?php

include 'PersonneSal.class.php';

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
        
        
        <h2>J'affiche la constante PII</h2>
        <?php

               
        
        
        echo "<h3>Voici ma constante PII  :" . PersonneSal::PII . "</h3>" ;

        ?>

    </div>    
</body>
</html>