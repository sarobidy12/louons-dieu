<DOCTYPE HTML>
<html>
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="<?php echo CSS;?>aos.css">
            <link rel="stylesheet" href="<?php echo CSS;?>style.css">
            <link rel="stylesheet" href="<?php echo CSS;?>bootstrap.css">
            <link rel="stylesheet" href="<?php echo CSS;?>bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo CSS;?>style.scss">
            <link rel="stylesheet" href="<?php echo CSS;?>style.css.map">
            <script src="<?php echo JS;?>jquery.min.js"></script>
            <title>devinete</title>
    </head>
    <body>
        
        <?php
            require VUE."_header.php";
    
                echo "<div class='container'>";
                    echo $contentPage;
                echo "</div>";
            
            require VUE."_footer.php";
        ?>

        <script src="<?php echo JS;?>aos.js"></script>
        <script src="<?php echo JS;?>angular.js"></script>
        <script src="<?php echo JS;?>angular.min.js"></script>
        <script src="<?php echo JS;?>app.js"></script>
        <script src="<?php echo JS;?>bootstrap.bundle.js"></script>
        <script src="<?php echo JS;?>bootstrap.bundle.min.js"></script>
        <script src="<?php echo JS;?>bootstrap.min.js"></script>
        <script>
        $(document).ready(function(){
            AOS.init({
                duration:1500
            });
        });
        </script>
    </body>
</html>