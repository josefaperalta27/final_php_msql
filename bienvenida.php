<?php
 session_start();
 if (!isset($_SESSION["usuario"])){
    echo'
         <script>
             alert("Por favor debes iniciar sesion");
             window.location = "index.php";
         </script>
    '; 
      
  
    session_destroy();
    die();
 }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <H1>BIENVENIDO, YA PODES NAVEGAR</H1>
    
    <a href="php/cerrar_sesion.php"> Cerrar sesion</a>
</body>
</html>