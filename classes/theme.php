<?php

namespace classes;
use model\database;

/**
 * ceci est un objet qui va nous permetre insere 
 * ou lister ou recuperer des themes
 */

 class theme extends database{

    /**
     * CECI permet de recuper les lists des themes
    */

    public static function all(){
        
        $a= parent::bdd()->query("SELECT * FROM theme");
        $b= $a->fetchall(\PDO::FETCH_OBJ);
        return $b;

    }

}
?>