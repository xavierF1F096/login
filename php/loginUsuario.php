<?php

session_start();
include 'conexion.php'; 
$Correo=$_POST['CorreoElectronico'];
$Contrasen=$_POST['Contrasen'];

$validar_login=mysqli_query($conexion,"SELECT * FROM usuario WHERE Correo='$Correo' AND Contrasen='$Contrasen'");

if(mysqli_num_rows($validar_login) > 0){
     $_SESSION['usuario']=$Correo;

   header("location: ../principal.php");

}else{

    echo '<script>

       window.location="http://localhost/Miranda/UsuarioNoexistente.php"
    </script>';
 }
?>