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
    
    <title>BRAWLERS</title>
    <link rel="stylesheet" type="text/css"href="../stilo.css">
</head>
  <style>

    h1{ 
            -webkit-text-fill-color:rgb(0, 0, 0);
           
                
}
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
      <li> <a href="../Acerca de Brawl satrs/Acerca de brawl satars.php" >Acerca de brawl stars</a></li>
      <li> <a href="../skins/skins.php" >Skins</a></li>
</ul>
  <div style="position:absolute; top: 150px; left:30%">
    <img src="../IMG/ah.png" height="50px" alt="">
    <h1 id="titulo" >¡Brawl stars tine temporadas! </h1>
    <pre style="background-color: #0066ff9d; font-size:large; font-family: Arial, Helvetica, sans-serif;"><b>
  
Antes Brawl Stars antes solo
tenia actualizaciones, pero no temporadas,
pero a partir del 24 de noviembre del 2020, 
publicaron el primer anuncio de temporada. El 14 de Mayo de 2020, salio la primera  
temporada de Brawl Stars, que duro hasta el 6 de Julio de 2020
con la tematica de "El bazar de tara", junto a su nuevo brawler "Gale".
</b>


    </pre>
    <h1 id="titulo" >¡Brawl Pass! </h1>
  <pre  style="background-color: #0066ff9d; font-size:large; font-family: Arial, Helvetica, sans-serif;"> 
    <b>
El Brawl Pass es una opción añadida el mayo del 2020,
la función del Brawl Pass es ser un beneficio si lo
compras, te da recompensas como monedas, gemas, hasta a un Brawler.
Pero tambien esta la version gratis, donde tiene 
70 niveles que solo incluye un pack de pins.
</b>
</pre>
<img src="../IMG/Brawl_Pass.webp" height="150px" alt="">
   
<h1 id="titulo" >Temporada 1 "El bazar de Tara" </h1>
<pre  style="background-color: #0066ff9d; font-size:large; font-family: Arial, Helvetica, sans-serif;"> 
  <b>
El Brawl Pass es una opción añadida el mayo del 2020,
la función del Brawl Pass es ser un beneficio si lo
compras, te da recompensas como monedas, gemas, hasta a un Brawler.
Pero tambien esta la version gratis, donde tiene 
70 niveles que solo incluye un pack de pins.
</b>
</pre>
  </div>   
   
    
  </body>

</html>