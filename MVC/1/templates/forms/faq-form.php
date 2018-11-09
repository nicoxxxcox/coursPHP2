


<form action="add_question.php" method="post">
    <div class="form-group">
        <Label for="question">Question</Label>
        <input type="text" name="question" id="question" class="form-control" placeholder="Votre question" required >
    </div>

    <div class="form-group">
        <Label for="answer">Réponse</Label>
        <input type="text" name="answer" id="answer" class="form-control" placeholder="Votre réponse" required >
    </div>

    <button class="btn btn-primary" type="submit">Envoyer</button>
</form>

<?php

if(!empty($_POST['question']) && !empty($_POST['answer'])){

    $data['question'] = $_POST['question'] ;
    $data['answer'] = $_POST['answer'] ;

add($pdo, $data);

header('location:index.php');


}

?>