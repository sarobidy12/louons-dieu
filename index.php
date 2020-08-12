<?php

session_start();

    require_once "_config.php";
    require_once "_autoload.php";
    myAutoload::start();

            /**
              * nous allons recuperer 
              * les valeurs des entre par le GET 
              * 
             */
                use classes\routeur;
                $a= $_GET['p'];
                $b= new routeur($a);
                $b->renderControlleur();
 
?>
