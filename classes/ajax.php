<?php
namespace classes;

/**
 * 
 * ceci permet de recuperer
 * les element a appeler pandents les l'appeles
 * 
 */
class ajax{
    
    private $data;// donne sous form de tableau

    private $page;// le nom de la page a inclure


    /**
     * 
     * le construct va nousd permetre de recupere 
     * les valeur entre en parametre
     *  
     */
    public function __CONSTRUCT($data){
        $this->data= $data;
    }

    /**
     * 
     * ceci permete dce recupere le nom de la page
     * a unclure 
     */

     private function page(){
        $a = explode('/',$_GET['p']);
        $this->page= $a[1];
     }

    /**
     * 
     * ceci permet de unlure la page
     *   a appeller
     * 
     */

     public function unclude(){
        require "ajax/".$this->page;
     }
}

?>