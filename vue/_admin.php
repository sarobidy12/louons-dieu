<?php

    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
    }
       
?>

<div class="container">
    <center>
    <div class="admin">
        <ul>
                    <li class='lien' data-aos='zoom-in' data='admin/add-auteur.html'>
                        <img src="public/IMG/LOGO/new-users.png" style='width:15vh;height:20vh' alt="">
                        <B>AJOUTER NOUVEAU AUTEUR</B>
                    </li>
                  
                    <li class='lien' data-aos='zoom-in' data='admin/add-element.html'>
                        <img src="public/IMG/LOGO/new-element.png" style='width:15vh;height:20vh' alt="">
                        <B>AJOUTER NOUVEAU ARTICLE</B>
                    </li>

                    <li class='lien'  data-aos='zoom-in' data='admin/edit.html'>
                        <img src="public/IMG/LOGO/edit.png" style='width:15vh;height:20vh' alt="">
                        <B>MODIFIERS DES ARTICLES</B>
                    
                    </li>
                  
                    <li class='lien' data-aos='zoom-in' data='admin/new-letter.html'>
                        <img src="public/IMG/LOGO/new-letter.png" style='width:15vh;height:20vh' alt="">
                        <B>ENVOYER DES MAIL AU ABONNE</B>
                    </li>

                    <li  class='lien' data-aos='zoom-in' data='admin/statistique.html'>
                        <img src="public/IMG/LOGO/statistique.png" style='width:15vh;height:20vh' alt="">
                        <B>VOIR LES STATISTIQUE</B>
                                        
                    </li>

                    <li  class='lien' data-aos='zoom-in' data='admin/parametre.html'>
                        <img src="public/IMG/LOGO/parametre.png" style='width:15vh;height:20vh' alt="">
                        <B>REGLAGE DU SITE</B>
                    </li>
        </ul>
    </div>
    </center>

</div>