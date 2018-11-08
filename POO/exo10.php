<?php

include 'Geometrie.class.php';

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
        

       <form action="exo10.php" method="post">           
           <label for="number">Donnez le rayon de votre cercle</label> 
           <br>
           <input type="number" name="rayon" id=""> 
           <br>
           <button type="submit">OK</button>
       </form>

       <?php
            if(isset($_POST['rayon'])){

                Geometrie::calcSurface($_POST['rayon']);
                
                echo "<h3>Pour un rayon de " .$_POST['rayon'] ." cm la surface du cercle est ".Geometrie::$surface." cm²</h3>";

                echo "<h3>Et son périmètre est : ".Geometrie::calcPerimetre($_POST['rayon'])." cm</h3>";
            }


       ?>

    </div>    
</body>
</html>