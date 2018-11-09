<?php


include 'templates/_header.php';
include 'class/Dbconnect.class.php';
include 'class/User.class.php';

$pdo = new Dbconnect("localhost","root","","bdng");
$user= new User($db);



$users = $bdd->query('SELECT * FROM user');

foreach ($users as $key => $value) {
    echo "<h1> Hein" . $value['nom'] ."</h1>";
}


$user->setPass("dodo");





include 'templates/_form_user.php';
include 'templates/_footer.php';









