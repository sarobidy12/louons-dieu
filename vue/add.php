<form action="" method="post">


    <div class="form-group">
        <label for="title">title</label>
        <input type="text" id="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">Verse</label>
        <input type="text" id="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="title">contenu</label>
        <textarea class='form-control' name="" id="" cols="30" rows="10">
        </textarea>
    </div>

    
    <div class="form-group">
        <label for="title">Conseil</label>
        <textarea class='form-control' name="" id="" cols="30" rows="10">
        </textarea>
    </div>

    <?php
        if($param['categorie'] == 1){
            echo '
                <div class="form-group">
                    <label for="title">IMG</label>
                    <input type="file" class="form-control" name="" id="">
                </div>
            ';
        }
    ?>

    <?php
        if($param['categorie'] == 2 OR $param['categorie'] == 3){
            echo '
                <div class="form-group">
                    <label for="title">LIEN URL</label>
                    <input type="text" id="title" class="form-control">
                </div>
            ';
        }
    ?>

    <div class="form-group">
        <label for="title">Theme</label>
            <select class='form-control'  name="" id="">
                <?php
                    foreach($param['theme'] AS $a){
                        echo "<option value='$a->id'>".$a->nom_theme."</option>";
                    }
                ?>
            </select>
    </div>

    <div class="form-group">
        <label for="title">Auteur</label>
            <select class='form-control'  name="" id="">
                <?php
                    foreach($param['auteur'] AS $b){
                        echo "<option value='$b->id'>".$b->auteur_nom."</option>";
                    }
                ?>
            </select>
    </div>
</form>