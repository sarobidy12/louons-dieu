<?php
namespace classes;
use model\database;

/***
 * ceci permet a chaque de recuper 
 * la dernier id du inserction
 */
class lastId extends database{

    /**
     * ceci permet directement de recuper les 
     * La Dernier id 
     * 
     */

     public static function lastId($table){

            $a= parent::bdd()->query("SELECT count(*) FROM $table");
            $b= $a->fetchall();
            $c = $b[0][0] + 1 ;
            return $c;

     }
    
}

?>