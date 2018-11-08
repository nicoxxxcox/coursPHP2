<?php

include_once "Quatres_roues.class.php";

class Camion extends Quatres_roues
{
    protected $longueur;
    protected $nb_portes;


    public function __set($nom , $valeur)
    {
        $this->$nom = $valeur;
    }

    public function __get($nom)
    {
        return $this->$nom;
    }

    public function ajouter_remorque($longueur_remorque)
    {
        $this->longueur = $longueur_remorque ;
    }

   
}