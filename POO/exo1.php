<?php

include 'Personne.class.php';

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
        
        <form action="exo1.php" method="post">
            
            <label for="name">Votre nom</label>
            <br>
            <input type="text" name="name" placeholder="Donnez votre nom" >
            <br>
            <br>
            <label for="age">Votre age</label>
            <br>
            <input type="text" name="age" placeholder="Donnez votre age">

            <br>
            <br>

             <button type="submit">Envoyer</button>
        </form>


        <?php

        if(isset($_POST['name']) && isset($_POST['age'])){
            
            $perso = new Personne;

            $perso->setNom($_POST['name']);
            $nom = $perso->getNom();

            if($_POST['age'] > 0  && $_POST['age'] < 120){
                $perso->setAge($_POST['age']);
                $age = $perso->getAge();

                echo "<h2>Bonjour <u>" . $nom . "</u>, ton age est de <u>". $age . "</u> ans</h2>";

            } else { 
                echo "<h2>ERREUR ! : Tu dois donner un age entre 0 et 120 ans !</h2>";
            }

        
        }

        ?>

        




    </div>    
</body>
</html>