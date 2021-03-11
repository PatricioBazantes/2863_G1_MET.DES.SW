<!doctype html>
<html lang="en">
<?php 
    require_once('header_error.php');
    $variable1=($_GET['variable1']);
?>
<body>
<div id="clouds">
            <!--<div class="cloud x1"></div>
            <div class="cloud x1_5"></div>
            <div class="cloud x2"></div>
            <div class="cloud x3"></div>
            <div class="cloud x4"></div>
            <div class="cloud x5"></div>-->
        </div>
        <div class='c'>
            <div class='_404'>Error</div>
            <hr>
            <div class='_1'>Se generó el siguiente error: </div>
            <div class='_2'><?php echo "$variable1"; ?></div>
            <a class='btn' href='../index.php'>Volver a la página principal >></a>
        </div>
</body>
</html>