<?php

class PersonneSal {

    
    protected $nom ; 
    protected $prenom ;  
    
   const PII = 3.14159265359;
   
   private static $solde = "1000 €";

   public static function getSoldeStatic()
   {
       return self::$solde; 
   }

   
    public function __construct($nom , $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom ; 

    }

    public function __set($name , $value)
    {
        
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }


   
    public function affInfos(){
        echo "Les informations sont : <br/> nom : " . $this->nom . "  <br> prenom :  " . $this->prenom . " <br> adresse : " . $this->adresse ;
    }
}