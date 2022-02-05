<?php
session_start();


if(!isset($_SESSION['usuario'])){
    echo '<script>
    alert("Debes iniciar sesion");
    window.location="http://localhost/Miranda/"
 </script>';
session_destroy();
die();
}

$correo=$_SESSION['usuario'];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido al sistema</h1>
    <a href="php/cerrarSesion.php">Cerrar sesión</a>
    
    <p><?php echo $correo;?></p>        
</body>
</html>