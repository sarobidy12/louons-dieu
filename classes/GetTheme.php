<?php
namespace classes;
use model\database;
use PDO;
/**
 * 
 * ceic permet de recupere Id 
 * de la classification
 * 
 */
class GetTheme extends database{

    private $data;//le donne a l'entre

    public function __CONSTRUCT($id){
        $this->data= $id;
    }

    /**
     * 
     * cei permet de recuper les elements 
     * et return ID
     * 
     */

     public function getClass(){
         
        $a= parent::bdd()->prepare("SELECT * FROM pages WHERE name_pages=?");
        $a->execute(array($this->data));
        
        if($a->rowCount() === 1){
            $b= $a->fetch(\PDO::FETCH_OBJ);
            return $b->id_classement;
        }else{
            return "error";
        }
     }

     /**
      * ceci permetera de recuperel l'id de la page 
      */

      
     public function getId(){
        $a= parent::bdd()->prepare("SELECT * FROM pages WHERE name_pages=?");
        $a->execute(array($this->data));

        if($a->rowCount() == 1){
            $b= $a->fetch(\PDO::FETCH_OBJ);
            return $b->id;
        }else{
            return "error";
        }
     }
}
?>