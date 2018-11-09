<?php

class User
{
    
    private $id;
    private $nom = "nico";
    private $prenom;
    private $naissance;
    private $date;
    private $password;



    public function __construct($pdo)
    {
        $bdd = $pdo->getDB();        
        
    }

    public function __set($property , $value)
    {
        $this->$value = $value;
    }

    public function __get($value)
    {
        return $this->$value;
    }


  


}