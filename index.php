<?php
session_start();
if(isset($_SESSION['usuario'])){
    header("location: principal.php");
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Document</title>
</head>
<body>
    <main>
        <div class="contenedor__todo">
           <div class="caja__trasera">
               <div class="caja__trasera-login">
                   <h3>¿ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
               </div>
               <div class="caja__trasera-register">
                 <h3>¿Aun no tienes una cuenta?</h3>
                 <p>Registrate para que puedas iniciar sesion</p>
                 <button id="btn__registrarse">Registrarse</button>
               </div>
           </div>
             
           <div class="contenedor__login-register">
               <form action="php/loginUsuario.php" method="POST" class="formulario__login">
                   <h2>Iniciar Sesion</h2>
                   <input type="text" placeholder="Correo Electronico" name="CorreoElectronico" required >
                   <input type="text" placeholder="Contraseña" name="Contrasen" required>
                   <button>Entrar</button>
               </form>
               <form action="php/registroUsuario.php" method="POST" class="formulario__register">
                   <h2>Registrar</h2>
                   <input type="text" placeholder="Nombre Completo" name="Nombre" required>
                   <input type="text" placeholder="Correo Electronico" name="CorreoElectronico" required>
                   <input type="text" placeholder="Usuario" name="Usuario" required>
                   <input type="text" placeholder="Contraseña" name="Contrasen" required>
                   <button>Registrarse</button>
               </form>
           </div>

        </div>
    </main>
</body>

<script type="text/javascript" src="js/script.js"></script>
</html>