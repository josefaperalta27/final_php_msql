<?php
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuario(nombre_completo, correo, usuario, contrasena)
          VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

//verificar que el correo no se repita
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario where correo='$correo'"); 
if(mysqli_num_rows($verificar_correo) >0){
    echo'
       <script>
             alert("Este correo ya esta registrdo, intenta con otro diferente");
             window.location = "../index.php";
         </script>
    '; 
    exit();
}

//verificar que el nombre de usuario no se repita 
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario where usuario='$usuario'"); 
if(mysqli_num_rows($verificar_usuario) > 0){
    echo'
       <script>
             alert("Este usuario ya esta registrdo, intenta con otro diferente");
             window.location = "../index.php";
         </script>
    '; 
    exit();
}
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
         <script>
             alert("usuario almacenado exitosamente");
             window.location = "../index.php" ;
         </script>
             ';
}else{
    echo'
    <script>
             alert("usuario almacenado exitosamente");
             window.location = "../index.php" ;
         </script>
             ';
}

mysqli_close($conexion);