<?php

class Dbconnect
{


    private $host = "localhost";
    private $login ;
    private $password;
    private $dbname;
    private $id_connexion;
    private $db;


    public function __construct($host="localhost", $login, $password , $dbname)
    {
        $this->host = $host ;
        $this->login = $login;
        $this->$password = $password;
        $this->dbname = $dbname;
        $this->connexion();

    }


    public function __set($property , $value)
    {
        $this->$value = $value;
    }

    public function __get($value)
    {
        return $this->$value;
    }

    

    public function connexion()
    {
        try
        { 
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname","$this->login","$this->password");
            
        } 
        catch(Exception $e) 
        { 
        die('Erreur : '.$e->getMessage()); 
        }      

    }

    public function getDB()        
    {
        return $this->db;
        echo "hola";
    }

    public function requette($q)
    {
        $res = ($q);
        return  $res;
    }


}