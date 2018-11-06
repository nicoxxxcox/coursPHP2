<?php

class PersonneSet {

    
    private $nom ; 
    private $prenom ;
    private $adresse ;

   
    public function __set($name , $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }   

   
    public function getNom()
    {
        return $this->nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }   

   
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse; 
    }   

   
    public function getAdresse()
    {
        return $this->adresse;
    }

   
    public function affInfos(){
        echo "Les informations sont : <br/> nom : " . $this->nom . "  <br> prenom :  " . $this->prenom . " <br> adresse : " . $this->adresse ;
    }
}