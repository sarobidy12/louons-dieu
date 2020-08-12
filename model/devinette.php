<?php

namespace model;
use model\bdd;
use classes\view;

/**
 * ceci permetera de faire inserction et modification ou suppression
 * de ses element de la devinette
 */
class devinette extends database{

    /**
     * cet funtion va nous peretre de inserer
     * les information dans la base de donne
     * 
    */
    
     public function addDev($value =array()){

        $a= parent::bdd()->prepare("INSERT INTO devinnette(title,content,date_creat) VALUE(?,?,NOW())");
        $a->execute(array($value[0],$value[1]));

     }

    /**
      * ceci permet de recupere tout les information 
      * devinette 
       * si := 0
       *        
    */

    public function findAll(){

        $a= parent::bdd()->query("SELECT * FROM devinnette");

        if($a->rowCount() >=1 ){

            $b= $a->fetchall(\PDO::FETCH_OBJ);
            return $b;

        }else{
            echo "aucun resultat";
            exit;
        }
    }

    /**
     * ceci permet recupere les information
     * comme le titre le contenu en function de l'id
     */

     public  static function find($id){

        $a= parent::bdd()->prepare("SELECT * FROM devinnette WHERE id=?");
        $a->execute(array($id));

        if($a->rowCount() == 1){
            return $b = $a->fetch(\PDO::FETCH_OBJ);
        }
        else{
            $a= explode('/',DIR);
            view::redirection('/'.$a[1].'/404.html');
            exit;
        }

     }

     /**
      * 
      * ceci permet de mofiifier le contenu de l'element 
      * 
      */

     public  function editDev($edit){

        $a= parent::bdd()->prepare("UPDATE devinnette SET title=? , content=? WHERE id=? ");
        $a->execute(array($edit[0],$edit[1],$edit[2]));
        $b= explode('/',DIR);
        view::redirection('/'.$b[1].'/home.html');
        exit;

     }

     /**
      * 
      * ceci permet de supprimer les elements dans 
      * le contenu de l'element 
      * 
      */

      public static function delDev($id){

        $a= parent::bdd()->prepare("DELETE FROM devinnette WHERE id=? ");
        $a->execute(array($id));
        $b= explode('/',DIR);
        view::redirection('/'.$b[1].'/home.html');
        exit;
     }


}

?>