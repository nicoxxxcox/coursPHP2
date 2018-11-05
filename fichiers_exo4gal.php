 <?php
 

 // si le param type est défini en GET , on assign $type
 $type = isset($_GET['type']) ? $_GET['type'] : "" ;

 
 if (!empty($type)){
     switch($type){
         case 'C' :
         $dossier = './images/chien';
         $title = "Les Chiens";
         break;

         case 'P' :
         $dossier = './images/poney';
         $title = "Les Poneys";
         break;

         case 'G' :
         $dossier = './images/girafe';
         $title = "Les Girafes";
         break;

         default : 
         $dossier = '';
         $title = "";
     }
 }

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
  
  <h1><?php  echo $title ; ?></h1>
  
  <?php 

    if(empty($type)){
        echo '<p> Vous devez choisir une galerie</p>';
    } else{
        chdir($dossier);
        $ouvert = opendir('.');

        while( $fichier = readdir($ouvert) ){
            
            if($fichier != '.' && $fichier != '..'){
            $files[] = $fichier ; 
            }
        }

        foreach ($files as $value) {
            echo '<img src ="' .$dossier .'/'. $value . '" width="300px"><br> ';
        }
    }

  ?>

  </div>   
 </body>
 </html>