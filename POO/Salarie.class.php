<?php

include "PersonneSal.class.php";

class Salarie extends PersonneSal {

    
   
    private $salaire ;

    public function __construct($nom , $prenom , $salaire)
    {
        $this->nom = $nom;
        $this->prenom = $prenom ; 
        $this->salaire = $salaire ;
    }   

   
    public function __set($name , $value)
    {
        
        
        $this->$name = strToUpper($value);
    }

    public function __get($name)
    {
        return $this->$name;
    }


   
    public function affInfos(){
        echo "Les informations sont : <br/> nom : " . $this->nom . "  <br> prenom :  " . $this->prenom . " <br> adresse : " . $this->adresse ;
    }
}