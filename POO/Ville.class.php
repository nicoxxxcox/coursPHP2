<?php

class Ville
{
    private $nom;
    private $dept;


    public function __construct($nom,$dept)
    {
        $this->nom =  $nom;
        $this->dept = $dept;
    }

    public function affVilleInfos()
    {
        return  "<h3>La ville de <u>" . $this->nom . "</u> est dans le département : <u>" . $this->dept . "</u></h3>";
    }

    

}