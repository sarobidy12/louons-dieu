<?php
  
   foreach($param AS $a){
       echo "<div class='devinnete'>";
         echo "<a href='devinette/".$a->id."'>".$a->title."</a>";
         echo "<hr>";
         echo $a->content;

            echo "<ul>";
              echo "<li><a href='edit/devinette/".$a->id."'>editer</a></li>";
              echo "<li><a href='delete/devinette/".$a->id."'>supprime</a></li>";
            echo "</ul>";

       echo "</div>";
   }

?>
<center>
  <a href="add.html">Ajouter</a>
</center>
