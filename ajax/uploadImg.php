<?php
var_dump($_FILES);
    if($_FILES['img']['name'] != ''){
        $test = explode('.',$_FILES['img']['name']);
        $extension= end($test);
        $name= date('j').'.'.$extension;
        $destination = PUBLICS.'IMG/ELEMENT/'.$name;
        move_uploaded_file($_FILES['img']['tmp_name'],$destination);
            $lien= "../public/IMG/ELEMENT/".date('j').".jpg";
            echo "<img src='".$lien."'>";
        }
?>