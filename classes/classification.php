<?php
namespace classes;
use model\database;
/**
 * ceci permet de recuperer les classifications
 * par id des element 
 *       ex: 1->lecture
 *       ex:2->video
 */
class classification extends database{


    private $id;//id de l'element

    public function __CONSTRUCT($id){
        $this->id= $id;
    }

    /**
     * ceci permet de recupere l'element selon id
     */

    private function element(){
        $a = parent::bdd()->prepare("SELECT * FROM classement WHERE id=?");
        $a->execute(array($this->id));

        if($a->rowCOunt() == 1){

            $b= $a->fetch(\PDO::FETCH_OBJ);
            return $b->categorie_classement;

        }else{

            return "element introuvable";

        }

    }


    /**
     * ceic permet de recupere tout les element necessaire
     * le resultat
     */

     public function getElement(){

         return $this->element();
         
     }


}



?>