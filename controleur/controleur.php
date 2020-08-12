<?php

namespace controleur;
use classes\view;
use classes\theme;
use classes\GetTheme;
use classes\ajax;
use classes\classification;
use model\auteur;

/**
 * ce classe permet de affichher les vue en function du 
 * url
*/

class controleur{

    /**
     * 
     * on appelle la function RedAdmin
     * lorsque le admin.html est appele
     */
    
     public function RedAdmin($vue){

        $afficher = new view('_'.$vue);
        $afficher->render();
        $_SESSION['message'] = null;
         
     }  
 
     /**
      * 
      * cette controller gerer les page necesaince dans l'administrateur
      */

      public function Admin($vue){
     
        /**
         * pour facilites formulaire 
         * nous vons mis en plase un system de rangement par id 
         * ex tout ce qui sont -a lire            aurons ID:1
         *                     -a regarer(video)  aurons ID:2
         *                      etc
         */
          $a= explode('/',$vue);

          if($a[1] == 'add'){
            $b= str_replace('.html','',$a[2]);

               /**
                * les categories lecture ou 
                * les categories video
                */
               $id= new GetTheme($b);
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

                     $afficher = new view('add.html');
                     $afficher->render($f);
            
          }else{

            $afficher = new view($vue);
            $afficher->render();

          }
      }

     /**
     * 
     * lorsqu le url = home appell la function home();
     * 
    */

    public function showHome($vue){

            $afficher = new view($vue);
            $afficher->render();

    }

    /**
     * ceci est un avertissement lorsqu'un utilisateur tente de metre 
     * des erreur dans le url et evite  de cree un bug 
    */

    public function showError($vue){

        $afficher = new view($vue);
        $afficher->render();

    }

    /**
     * 
     * ceci permet de gere les inserction en toute securite
     * 
     */

     public function insert($vue){

         // nous allons mettre dansd un table les elemet du url ex: insertion/auteur = [insertcion,auteur];
         $b= explode('/',$vue);

         /**
           * les objet  
           * appeler
         **/

               if($b[1] == 'auteur'){
                  $objet= new auteur();
                  $objet->creat($_POST);
                  $_SESSION['message']= '<div class="alert alert-success" role="alert"><b>'.$_POST['Nom']."</b> est un nouveau auteur</div>";
               }
               
               view::redirection('../admin.html');
     }
   
     /***
      * 
      *ceci permet de inclure tout les donnes en ajax 
      */

     public function ajax($vue){
         $requette= new ajax($vue);
         $requette->unclude();

     }
  
}

?>