<?php
namespace model;
use model \database;

/**
 * 
 * cet objet permet echanger des information concernant tout  
 * sur auteur 
 * ex nom , prenom
 * et aussi la possibliliter insert un nouveau 
 * modefier , supprimer 
 */

class auteur extends database{

    private $id;

    private $nom;

    private $prenom;

    private $date_aniversaire;

    private $citation;

    private $photo;

    /**
     * le constructeur permet de recuperer id 
     * pour ensuite les utiliser
     */

    public function __CONSTRUCT($id = null){
        $this->id=  $id;
    }

    /**
     * 
     * ceci permet de inserte un nouveau auteur
     */

    public function creat($value = null){

        if(isset($value)){
            $a= parent::bdd()->prepare("INSERT INTO auteur(auteur_nom,auteur_prenom,auteur_citation,auteur_aniversaire,auteur_mail,auteur_profil) VALUE(?,?,?,?,?,?)");
            $a->execute(array($value['Nom'],$value['Prenom'],$value['citation'],$value['burn'],$value['mail'],$value['photo']));
        }
    }

    /**
     * 
     * ceci permet de recupere les listes
     * des auteur;
     */

     public function all(){

        $a= parent::bdd()->query("SELECT * FROM auteur");
        $b= $a->fetchall(\PDO::FETCH_OBJ);

        return $b;

     }
       




}


?>