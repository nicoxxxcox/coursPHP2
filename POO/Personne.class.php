<?php

class Personne {

    
    private $nom ; 
    private $age ;

    public function __construct($nom , $age)
    {
        $this->age = $age;
        $this->nom = $nom;
    }

    public function setNom($nom)
    {
        $this->nom = $this->majuscule($nom);
    }
    
    //
    //@return strings 
    private function majuscule($chaine)
    {
        return strToUpper($chaine);
    }

    public function setAge($age)
    {

        if($age > 0  && $age < 120){
             $this->age = $age;
        } else { echo "<h2>ERREUR ! : Tu dois donner un age entre 0 et 120 ans !</h2>";}
       
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getAge()
    {
        return $this->age;
    }
}