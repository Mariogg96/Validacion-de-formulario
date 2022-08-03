<?php
   session_start(); 

   if(isset($_SESSION['usuario'])){
      header("location: inicio.php");
       
        }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Bienvenidos a Himark</title>
</head>
<!--Formularios -->
<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a HiMark</h2>
                <p class="blanco">Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <form action="php/login_usuario.php" method=POST  class="formulario2">
            <h2 class="create-account">Iniciar Sesion</h2>
            <input type="email" name="email" placeholder="Email" name="nombre" id="email">
            <input type="password" name="password" placeholder="Contraseña" name="password" id="password">
            <input class="boton" type="submit" value="Iniciar Sesion">
        </form>
            </div>
        </div>
        <form action="php/register_db.php" method="POST" class="formulario">
            <h2 class="create-account">Crear una cuenta</h2>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" placeholder="Nombre" name="nombre" id="name">
            <input type="email" placeholder="Email" name="email" id="email">
            <input type="password" placeholder="Contraseña" name="password" id="password">
            <input class="boton" type="submit" value="Registrarse">
        </form>
    <div class="container-form sign-in">
        <form  class="formulario">
            <h2 class="create-account">Iniciar Sesion</h2>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="email" placeholder="Email" name="nombre" id="email">
            <input type="password" placeholder="Contraseña" name="password" id="password">
            <input class="boton" type="submit" value="Iniciar Sesion">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p class="blanco">Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <!--Notificaciones cuando se envia el formulario-->
    <p class="notify check_notify">¡TE REGISTRASTE CORRECTAMENTE!</p>
    <p class="notify error_notify">¡UPP! OCURRIO UN ERROR, POR FAVOR VERIFICA TUS DATOS</p>
    <script src="script.js"></script>
</body>

</html>