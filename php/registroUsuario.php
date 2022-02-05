<?php
include 'conexion.php'; 

$Nombre=$_POST['Nombre'];
$Correo=$_POST['CorreoElectronico'];
$Usuario=$_POST['Usuario'];
$Contrasen=$_POST['Contrasen'];


$query="INSERT INTO usuario (Nombre,Correo,Usuario,Contrasen) VALUES('$Nombre','$Correo','$Usuario','$Contrasen')";

$ejecutar=mysqli_query($conexion,$query);
if($ejecutar){
    echo '<script>
       alert("Usuario Registrado");
       window.location="../index.html"
    </script>';
}else{
    
    echo '<script>
       alert("Intentalo otra ves");
       window.location="../index.html"
    </script>';
}

mysqli_close($conexion);
?>