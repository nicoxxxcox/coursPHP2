<?php

class PersonneNew {

    
    private $nom ; 
    private $prenom ;
    private $adresse ;

    public function __construct($nom = "inconnu" , $prenom ="inconnu",$adresse = "inconnu" )
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
    }

    public function __destruct()
    {
        echo " L'objet " . $this->nom . " est détruit" ;

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