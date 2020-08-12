<?php
    /***
     * ceci permet de savoir l'emplacement de chaque dossier dans le disque dur
    */
class myAutoload{

    /**
     * 
     * ceici pemrme de declare toute les constantes dans le application
     * 
    */
    public static function start(){

        $root= $_SERVER['DOCUMENT_ROOT'];
        $dir= $_SERVER['REQUEST_URI'];
        $host= $_SERVER['HTTP_HOST'];
        define('ROOT',$root);
        define('CONTROLLEUR',$root.'louons dieu/controlleur/');
        define('MODEL',$root.'louons dieu/model/');
        define('VUE',$root.'louons dieu/vue/');
        define('CLASSES',$root.'louons dieu/classes/');
        define('PUBLICS',$root.'louons dieu/public/');
        define('CSS','http://'.$host.'/louons%20dieu/public/css/');
        define('JS','http://'.$host.'/louons%20dieu/public/js/');
        define('DIR',$dir);
        define('HOST',$host);  
        
    }
       
   
}
?>