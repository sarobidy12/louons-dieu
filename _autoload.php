<?php

/**
 * cici permet de charger automatique les classes en function de leur nom 
 */

 function myautoload($name){

     $name= str_replace("\\","/",$name);
     require $name.".php";
     
 }

 spl_autoload_register('myautoload');

?>