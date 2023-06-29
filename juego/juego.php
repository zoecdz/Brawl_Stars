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
    
    <title>JUEGO</title>
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
      <li> <a href="../Acerca de Brawl satrs/Acerca de brawl satars.php" >Acerca de brawl stars</a></li>
      <li> <a href="../actualizaciones/actualizaciones.php" >Actualizaciones</a></li>
      <li> <a href="../skins/skins.php" >Skins</a></li>
</ul>
<div style="position: absolute; top: 150px;left: 25%;">
  <h1 style="background-color: #0066ff8c;color:black ; font-size: large; font-family: Arial, Helvetica, sans-serif;" ><center>
    ¿Como se juega Brawl Stars?</center></h1>
  <pre style="background-color: #0066ff8c; color: black;   font-size: large; font-family: Arial, Helvetica, sans-serif;"><b>
  <br>
  Brawl stars es un Juego tacticl. Tiene tres joysticks en
  en la pantalla, uno azul para el movimiento, uno rojo 
  para el ataque y uno mas de color amarillo para 
  el super-ataque. Luego hay un boton verde  (El Gadget) 
  que varia su diseño respecto al brawler que estes jugando.  
  </b>
  <br>
  <img src="../IMG/ComoJ.jpeg" height="340" alt="">
  <br>
  <b>
  Cada brawler tiene su propio tipo de disparo, al igual que su
  velocidad, su alcance, etc. En algunos casos estos factores 
  puede ser iguales o compartir una que otra cosa. Excepto su
  diseño, cada Brawler tiene su propio diseño de 
  basico (su ataque).

  Hay dos formas de atacar en brawl stars, Una que es el 
  auto apuntado que es cuando haces click en cualquier lado
  desde la mitad de la pantalla hacia la derecha sin tocar el 
  boton del super-ataque ni el gadget, o el apuntado

  En la siguiente imagen se encuentra Shelly el primer brawler 
  con el que jugas en el juego, asi seria el ataque de shelly 
  </b>
  <br>
  <img src="../IMG/DisparoS.jfif" height="300 " alt="">
  <br>
  <br>
  <h1 style="background-color: rgba(132, 179, 250, 0.548);"><center> En Brawl hay diferentes <br> modos de juego. </center></h1>
  <b> Estos se pueden dividir en:</b>
  "3 contra 3 por copas", "supervivencia en solitario o duos",
  "modos de fin de semana", "Liga estelar", "Modos del club",
  "Los torneos mensuales", "Los mapas creados por la comunidad"
  y algun posible evento de temporada donde consigues 
  recompensas.

  <h2 style="background-color:rgba(132, 250, 213, 0.442) ;">Modos 3 contra 3:</h2>
  Se trata de dos equipos que se enfrentran, el objetivo depende del modo
  que se este jugando.
  Brawl Stars Principalmente se basa en esta modalidad de juego
  ya que fue creado para jugar en equipo junto a otras personas y 
  pocos modos no siguen con este objetivo.
  <h2>Podemos encontrar:</h2>
  <pre style="background-color: rgba(178, 50, 238, 0.442); color: black;   font-size: large; font-family: Arial, Helvetica, sans-serif;">
  <b>ATRAPA GEMAS:</b>
  Es un modo de juego en el que debes conseguir y mantener durante 15 
  segundos 10 gemas en tu equipo. Estas aparecerán en el centro del mapa, 
  si mueres pierdes todas las gemas que conseguiste estarán en el lugar 
  donde moriste donde podrán recogerlas tus aliados o tus enemigos.
  </pre>


  
  

  </pre>
  </div>
  </body>
 

</html>