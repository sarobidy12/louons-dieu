<?php

namespace classes;
use controleur\controleur;

/**
 * 
 * le routeur permet de recupers l'url
 * 
*/

class  routeur{

    private $request;
    private $route= [
                    "home.html"=> "showHome",
                    "404.html"=> "showError",
                    "admin.html"=> "RedAdmin",
                    "admin"=> "Admin",
                    "ajax"=> "ajax",
                    "insert"=> "insert"
                ];

    /***
    *
    *  le construct permet de recupere des valeur entre en parametre
    *
    */

    public function __CONSTRUCT($a){
        $this->request= $a;
    }

    /**
     *
     * cela [ermet de recuper les id entre en url
     * 
     */
    private function getRoute(){
        $route= explode('/',$this->request);
        return $route[0];
    }

    /**
     * 
     * renderControlleur va me permetre d'affiche mes resultat en front end 
     *
    */

    public function renderControlleur(){

         $a= $this->getRoute();

         /**
          * verification pour que tout le mon n'essai pas de faire n'import de quoi
         */

           if($a != "index.php"){
                    if(key_exists($a,$this->route)){
                        //le show c'est lenom de la function appres verification
                        // et apres le controlleur va verifie si la function appeler existe dans l'objet 
                        // si il exist pas il n'affiche rien 
                                $show = $this->route[$a];
                                $vue = $this->request;
                                $mvc = new controleur;
                                $mvc->$show($vue);
                    }else{  
                         header("location:404.html");
                    }
            }else{
                header("location:home.html");
            }

      
            
    } 
 }
?>