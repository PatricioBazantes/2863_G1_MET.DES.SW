<!doctype html>
<html lang="en">
<?php 
    $variable1=($_GET['variable1']);
?>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>G1 - Usuario registrado</title>
      <link rel="stylesheet" media="all" href="../css/style.css" />
    </head>
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
            <div class='_404'>Listo</div>
            <hr>
            <div class='_1'>La petición se realizó con éxito</div>
            <div class='_2'><?php echo "$variable1"; ?></div>
            <a class='btn' href='../index.php'>Volver a la página principal >></a>
        </div>
</body>
</html>