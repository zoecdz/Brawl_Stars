<?php
session_start();

// Verificar si el usuario no está logueado
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header("Location: ../login.php"); // Redireccionar a la página de inicio de sesión
    exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>BRAWLS STARS.INFO</title>
    <link rel="stylesheet" type="text/css"href="../stilo.css">
</head>
  <style>
  
    body
    { 
       background-image:url('../IMG/fondoA.jpg') ;
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: 100% 100%;
    }
  
    
  
  </style>
  <body>
    <ul class="menu"> 

       <li> <a href="../index.php" >Principal</a></li>
       <li> <a href="../Brawlers/brawlers.php" >Brawlers.info</a></li>
       <li> <a href="../juego/juego.php" >Como jugar</a></li>
       <li> <a href="../actualizaciones/actualizaciones.php" >Actualizaciones</a></li>
       <li> <a href="../skins/skins.html" >Skins</a></li>
 </ul>
     <div>
       
          <a href="../Brawlers/brawlers.html"><img src="../IMG/boton s.webp" height="100px" alt="">
     </div>
  <div style="position: absolute; top: 100px;left: 30%;">
    <h1 style="background-color: #0066ff8c;color:black ; font-size: large; font-family: Arial, Helvetica, sans-serif;" ><center> 
    ¿Que es brawl stars?</center></h1>
    <pre style="background-color: #0066ff8c; color: black;   font-size: large; font-family: Arial, Helvetica, sans-serif;"><b>
    <br>
  
    'Brawl Stars' es un shooter brawler inspirado en los MOBA 
    de PC,pero adaptado para el móvil. Se trata de un juego 
    en la que un equipo de tres personas se enfrenta a otro 
    de otras tres,todo en un escenario por el que te vas a 
    tener que mover buscando coberturas y disparando a los 
    rivales.
    </b>
    <br>
    <img src="../IMG/QEBS.png" alt="">
    <br>
    <b>
    Jon Franzas
    Jon Franzas comenzó a trabajar en el proyecto original de 
    Brawl Stars en 2014. “En su primera versión, este era un 
    juego de combates a muerte que podría encajar en el género 
    de battle royale”, dice Franzas
    </b>
    <br>
    <img src="../IMG/JefeBS.jfif" alt="">
    

    </pre>
  </div>
   
    
  </body>

</html>