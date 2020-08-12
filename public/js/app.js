$(document).ready(function(){

    $('.cont').hide();
    $("#show-box").hide();
    
    /**
     * ceci est un sytem de clique sur le contenu au lieu de clicke sur un lien lien
     * dynamique 
     * ->admin
    */
    $('ul .lien').click(function(){
        var lien = $(this).attr('data');
        window.location(lien);
    });

    /***
     * Ceci permet de afficher sur le box les formulaire
     *  nessiceaire pour 
     * Pour inserer 
     *  
     */

     $('.add').click(function(){

        var data= $(this).attr('data');

        $.ajax({
            url:'http://127.0.0.1/louons%20dieu/ajax/GFormulaire.php',
            cache:false,
            type:'GET',
            data:{data:data},
            success:function(data){
                $('.cont').fadeIn(500);
                $("#show-box").fadeIn(600);
                $("#show-box").empty();
                $("#show-box").append(data);
            },
            error:function(){
                $('.cont').fadeIn(500);
                $("#show-box").fadeIn(600);
                $("#show-box").empty();
                $("#show-box").append('error');

            }
        })

     });

     /**
      * ceci permet de enlever le box sur l'ecrand 
      */

     $('.cont').click(function(){
        $(".cont").fadeOut(500);
        $("#show-box").fadeOut(500);
     });
    /**
     * ceci permet de uploader un image en ajax 
     * lors de li'inserction du nouveaux auteur 
     * 
     */

     $(".img_auteur").on('change',function(){
         
     })

    
 })