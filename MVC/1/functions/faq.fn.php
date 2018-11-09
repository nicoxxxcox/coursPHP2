<?php


// affiche toutes les questions-réponse stockées dans la bases
function show(PDO $pdo){
    $sql = "SELECT * FROM faq ORDER BY id DESC";
    $result = $pdo->query($sql);
    $row = $result->fetchAll(PDO::FETCH_ASSOC);
    return $row ;
}

// ajoute les questions réponses stockées dans le formulaire
function add(PDO $pdo , array $data){
    $question = $pdo->quote($data['question']);
    $answer = $pdo->quote($data['answer']);
    $sql = "INSERT INTO faq (question , answer) VALUES (:question , :answer)";
    $result = $pdo->prepare($sql);

    return $result->execute(array(
        ':question' => $question ,
        ':answer' => $answer
    ));

}