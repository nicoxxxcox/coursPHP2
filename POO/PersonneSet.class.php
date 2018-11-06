<?php

class PersonneSet {

    
    private $nom ; 
    private $prenom ;
    private $adresse ;

   
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