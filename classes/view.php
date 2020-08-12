<?php

namespace classes;

/**
 * la classe view est un objet 
 * qui va nous permetre de afficher les template 
 * en les securisont dans des framework
 *
 */
class view{

    // ceco les nom des page a inclure lorsqu'on appel la function
    private $data; 

    // ce sont des donne entre en parametre lors de la declaration de objet

    public function __CONSTRUCT($data){
        $this->data= $data;
    }

    // c'est celui qui permet d'afficher la vue
    public function render($param = null){

        $data= str_replace(".html","",$this->data);

        /**
         * donc pour que la view soit facile a charger 
         * on stokker le contenu dans un variable
         * t l'aficher dans le __template de base
         * 
         */
                ob_start();
                include_once(VUE.$data.".php");
                $contentPage=ob_get_clean();
                require VUE."__templateBase.php";
    }

    /**
     * cela permet de faire changer 
     * de page en url par url
     * 
     */
    public static function redirection($page){
        header("location:".$page);
    }

}