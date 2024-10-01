<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
<?php include("includes/navbar.php");?>
<center>
    <!--FORMULARIO---->
    <strong> <h1 class="titulo">Regístrate</strong></h1> 
      <form action="registro1.php"form class="form" method="POST" name="frm"><br>
      <!--CAJAS-DE-ENTRADA-DE-DATOS------------------------------------------------>
         Regístrate<br>
        <br><input class="cajas" type="text" name="nombre" placeholder="Ingresa tu nombre" required maxlength="30">
        <input class="cajas" type="email" name="correo" placeholder="Ingresa tu correo" required maxlength="30">
        <input class="cajas" type="password" name="contraseña" placeholder="Ingresa tu Password" required maxlength="30">
        
        <!--BOTON-DE-REGISTRARSE-------------------------->
        <input type="submit" class="btn" value="Registrarme">

        <p class="tengo-cuenta"><a href="login.php" class="tengo-cuenta">Regresar</a></p>
</center>
</form><br><br>
<?php include("includes/footer.html");?>
</body>
</html>