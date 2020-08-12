<div style='margin:0 auto;width:40%'>
<div id='res'>
</div>
<center>
    <div class='img_logo'>
        <label for="img">
            <img src="../public/IMG/LOGO/users.png" class='imgauteur' style='width:20vh' alt="">
        </label>
    </div>
</center>
<form action='../insert/auteur' method='POST'>
    <div class="form-group">
        <label for="Nom">Nom</label>
        <input class='form-control' type="text" name="Nom" id="Nom">
    </div>

    <div class="form-group">
        <label for="Prenom">Prenom</label>
        <input class='form-control' type="text" name="Prenom" id="Prenom">
    </div>

    <div class="form-group">
        <label for="">Date aniversaire</label>
        <input class='form-control' type="date" name="burn" id="">
    </div>
    
    <div class="form-group">
        <label for="mail">Adress e-mail</label>
        <input class='form-control' type="Mail" name="mail" id="mail">
    </div>
    
    <div class="form-group">
        <label for="Citation">Citation</label>
            <textarea class='form-control' type="text" name="citation" id="Citation"></textarea>
    </div>

    <input type="file" style='display:none' name="photo" id="img">
    <br>
    <br>
    <center>
        <input type="submit" class='btn btn-primary' value="AJOUTER">
    </center>
</form>
</div>

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
                        url:'http://127.0.0.1/louons%20dieu/ajax/uploadImgAuteur.php',
                        method:"POST",
                        data:form_data,
                        contentType:false,
                        cache:false,
                        processData:false,
                        success:function(data){
                            $('.img_logo').hide();
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