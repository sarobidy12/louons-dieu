<?php
namespace model;

/**
 * 
 * ceci est la connection a la base de donne
 * qui permetere la transfer des informations 
 * 
*/

class database{

    public static function bdd(){

        $bdd= new \PDO("mysql:host=127.0.0.1;dbname=louange",'root','');
        $bdd->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        return $bdd;
        
    }
}


?>