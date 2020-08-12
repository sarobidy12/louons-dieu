<?php
    use classes\GetTheme;
    use classes\theme;
    use classes\classification;
    use model\auteur;

    $a= explode('/',$_GET['data']);
    $b= str_replace('.html','',$a[1]);

   
            /**
             * les categories lecture ou 
             * les categories video
             */
            $id= new GetTheme($b);
            $g= $id->getId();
            $c= $id->getClass();
            
            /**
             * les liste des auteurs
             */
            
             $auteur= new auteur();
             $d= $auteur->all();

             /**
              * les liste des themes
             */

              $theme= new theme();
              $e= $theme->all();

              $f= [
                     "categorie"=>$c,
                     "auteur"=>$d,
                     "theme"=>$e,
               ];

                /**
                 * ceci permet de recuperer les la classificaion
                 */
                $theme= new GetTheme($b);
                $c= $theme->getClass();

                /**
                 * ceci permet de recuper le formulaire nessecaire 
                 * 
                 */

                $classification = new classification($c);
                $d= $classification->getElement();

                require VUE.'/formulaire//'.$d.'.php';
    
?>