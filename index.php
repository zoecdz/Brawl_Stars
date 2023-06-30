<?php
session_start();

// Verificar si el usuario no está logueado
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header("Location: login.php"); // Redireccionar a la página de inicio de sesión
    exit();
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>BRAWLS INFO</title>
    <link rel="stylesheet" type="text/css"href="stilo.css">
</head>
<style>
    body
    {
        font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
         
       background-image:url('IMG/fondop.jpeg') ;
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: 100% 100%;
    }
    
</style>

<body>
    <ul class="menu"> 
       <li> <a href="Acerca de Brawl satrs/Acerca de brawl satars.php" >Acerca de Brawl Stars</a></li>
       <li> <a href="Brawlers/brawlers.php" >Brawlers.info</a></li>
       <li> <a href="juego/juego.php" >Como jugar</a></li>
       <li> <a href="actualizaciones/asctualizaciones.php" >Actualizaciones</a></li>
       <li><a href="skins/skins.php">Skins</a></li>
 </ul>
    
 <title>Iniciar sesión a Brawl strars web</title>
 <style>
   body {
     font-family: Arial, sans-serif;
     background-color: #f4f4f496;
   }

   .container {
     width: 300px;
     margin: 100px auto;
     padding: 40px;
     background-color: #ffffff6c;
     border-radius: 5px;
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   }

   .container h2 {
     text-align: center;
   }

   .container input[type="text"],
   .container input[type="password"],
   .container input[type="gmail"] {
     width: 100%;
     padding: 10px;
     margin-bottom: 15px;
     border: 1px solid #ccc;
     border-radius: 3px;
   }

   .container input[type="submit"] {
     width: 100%;
     padding: 10px;
     background-color: #4CAF50;
     color: #fff;
     border: none;
     border-radius: 3px;
     cursor: pointer;
   }

   .container input[type="submit"]:hover {
     background-color: #45a049;
   }
 </style>
</head>


<body>
    
     
</body>

</html>