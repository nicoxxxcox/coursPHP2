<?php

include 'Personne.class.php';


$Michel = new Personne();


 $Michel->setAge(35);

 echo "Michel à " .$Michel->getAge(). " ans";