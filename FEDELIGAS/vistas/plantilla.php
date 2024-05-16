<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1">
    <title>FedeLigas SD</title>
    <?php 

    include ("includes/head.php");

    ?>

</head>

<body>
   <img src="vistas/recursos/imagenes/FONDOSPORT.png" alt="" class="fondo">
    <header>
      <?php 

    include ("includes/header.php");

    ?>
       
    </header>
    <main>
    <?php

        if (isset($_GET["path"])){

          if($_GET["path"]=="busqueda"||
            $_GET["path"]=="ficha"
            ){

            include "paginas/".$_GET["path"].".php";

          }else {

            include "paginas/404.php"; 

          }  

        }else{

          include "paginas/busqueda.php";

        } 

        ?>
    </main>

    <footer>
        <?php 

    include ("includes/footer.php");

    ?>
    </footer>
</body>

</html>
