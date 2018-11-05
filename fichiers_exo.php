<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fichiers</title>
</head>
<body>


<form action="fichiers_exo.php" method="post">

<input type="text" name="name" placeholder="nom" id="">
<br>
<input type="email" name="email" placeholder="email" id="">
<br>
<input type="tel" name="tel" placeholder="Tel" id="">
<br>

<button type="submit">Envoyer</button>

</form>

<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel'] ))
    {
        $form =  $_POST['name'] . " " . $_POST['email'] . " " . $_POST['tel'] . PHP_EOL ;
        	
    
        $fileForm = fopen("form.txt" , "a+" );
       //fputs($fileForm, PHP_EOL);
        fputs($fileForm , $form );
        fclose($fileForm);
        header("location , fichiers_exo.html");
        
    
    }

?>
    
</body>
</html>