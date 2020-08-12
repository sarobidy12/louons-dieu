<?php

   use classes\lastid;

    if($_FILES['img']['name'] != ''){

        $test = explode('.',$_FILES['img']['name']);
        $extension= end($test);
        $id= lastId::lastId('auteur');
        $name= $id.'.'.$extension;
        $destination = PUBLICS.'IMG/AUTEUR/'.$name;
        move_uploaded_file($_FILES['img']['tmp_name'],$destination);
            $lien= "../public/IMG/AUTEUR/".lastId::lastId('auteur').".jpg";
            echo "<center><div data-aos='zoom-in'><img src='".$lien."' class='img_auteur'></div></center>";
    
    }

?>