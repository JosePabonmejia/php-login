<?php
require 'basededatos.php';
 ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!-- LINK DE LOS ESTILOS -->
    <link rel="stylesheet" href="archivos/estilos/styles.css">

  </head>
  <body>

    <header>
      <a href="indice.php">Inicio</a>  <!--CABESERA MANDA AL INICIO  -->
    </header>
    <!--  -->
    <h1>Registro</h1>
    <span>or <a href="inicio.php">Iniciar sesion</a> </span>

    <form class="" action="registro.html" method="post">
      <input type="text" name="email" placeholder="Ingresa tu email">
      <input type="password" name="password" placeholder="Ingresa tu contraseña">
      <input type="password" name="confirm_password" placeholder="Confirma tu contraseña">
      <input type="submit" value="Enviar datos">
    </form>
  </body>
</html>
