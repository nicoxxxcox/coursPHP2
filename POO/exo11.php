<?php

include 'Bricolage.class.php';

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

         <h2>Périmètre rectangle(methode statique) de 10 x 30 : <?php echo Bricolage::calcPerRect(10 , 30); ?></h2>

           <?php Bricolage::calcSurfaceRect(10 , 30); ?>
          <h2>Surface rectangle(methode statique) de 10 x 30 : <?php echo Bricolage::$surfaceRectangle; ?></h2>

           <h2>Surface de l'appartement(methode statique)  : <?php  echo Bricolage::calcSurfApp(array(10=> 30 , 10=>10)); ?> m²</h2>


    
   
        

     

    </div>    
</body>
</html>