<?php

require 'config.php';
require 'functions/database.fn.php';
require 'functions/faq.fn.php';
$pdo = getPDO($config);

$faq = show($pdo);

require 'templates/_header.php';

?>


<div class="row">

<div class="col-md-8 col-12">
    <h3 class="font-weigth-bold text-primary"> F.A.Q </h3>

<?php



foreach ($faq as $key => $valeur) {
    ?>
    <div class="card my-3" style="">
        
        <div class="card-header">
        <h5 class="card-title"><?php echo $valeur['question']; ?></h5>
        </div>
        <div class="card-body">
            
            <p class="card-text"><?php echo $valeur['answer']; ?></p>
        </div>
    </div>

<?php   
}
?>


</div>
<div class="col-md-4 col-12 my-2">
    <h3 class="font-weigth-bold text-primary"> Ajoutez vos Questions/Reponses </h3>
    <?php
require 'add_question.php';

    ?>
    </div> 


</div>

<?php
require 'templates/_footer.php';

?>