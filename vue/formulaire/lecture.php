<div class="header-box">
    <?php echo str_replace('-',' ',$b);?>
    </div>
  
<div style='padding:1vh 5vh'>
    <label class='lecture-img' for="img">
            <img src="../public/IMG/LOGO/upload-img.png"  alt="">
                    AJOUTER UNE PHOTO
    </label>

    <div id="res"></div>
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

        <input type="file" style='display:none;' class="form-control" name="img"  class="img" id="img">

        <div class="form-group">
            <label for="title">Theme</label>
                <select class='form-control'  name="" id="">
                    <?php
                        foreach($f['theme'] AS $a){
                            echo "<option value='$a->id'>".$a->nom_theme."</option>";
                        }
                    ?>
                </select>
        </div>

        <div class="form-group">
            <label for="title">Auteur</label>
                <select class='form-control'  name="" id="">
                    <?php
                        foreach($f['auteur'] AS $b){
                            echo "<option value='$b->id'>".$b->auteur_nom."</option>";
                        }
                    ?>
                </select>
    </div>
</form>
</div>
<div id="res"></div>
<script>
    $(document).ready(function(){
        $(document).on('change','#img',function(){
            var file= document.getElementById("img").files[0];
            var image_name= file.name;
            var image_extension = image_name.split('.').pop().toLowerCase();
            var Image_size= file.size;
            if(jQuery.inArray(image_extension,['jpg','jpg','jpeg']) == -1){
                alert("Invalid Image File");
            }else{
                if(Image_size < 5000000){
                    var form_data= new FormData();
                    form_data.append("img",file);
                    var data= 'fg';
                    $.ajax({
                        url:'http://127.0.0.1/louons%20dieu/ajax/uploadImg.php',
                        method:"POST",
                        data:form_data,
                        contentType:false,
                        cache:false,
                        processData:false,
                        success:function(data){
                            $('#res').slideUp();
                            $('#res').slideDown();
                            $('#res').empty();
                            $('#res').append(data);
                        } 
                    });
                }else{
                    alert('non');
                   
                }
            }
        });
    })
</script>