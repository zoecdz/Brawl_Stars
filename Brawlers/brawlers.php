<?php
session_start();

// Verificar si el usuario no está logueado
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header("Location: ../login.php"); // Redireccionar a la página de inicio de sesión
    exit();
}
?>

<html>
  <head>
    
    <title>BRAWLERS</title>
    <link rel="stylesheet" type="text/css"href="../stilo.css">
  </head>
  <style  type="text/css" >


.zoom {
 
  transition: transform .2s; 
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5);
}



    body
    { 
       background-image:url('../IMG/fondoA.jpg') ;
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: 100% 100%;
    }
    h1{ 
            -webkit-text-fill-color:rgb(255, 255, 255);
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: #000000;       
}
    .texto-encima{
    
    position: absolute;
    top: 50px;
    left: 30px;
}

     
     
  
  </style>
  <body>
    <ul class="menu"> 
      <li> <a href="../index.php" >Principal</a></li>
      <li> <a href="../Acerca de Brawl satrs/Acerca de brawl satars.php" >Acerca de brawl stars</a></li>
      <li> <a href="../juego/juego.php" >Como jugar</a></li>
      <li> <a href="../actualizaciones/actualizaciones.php" >Actualizaciones</a></li>
      <li> <a href="../skins/skins.php" >Skins</a></li>
</ul>
    
     <div div="zoom"style="position: absolute; top: 120px;left: 15%;">
      <a href="../trofeos/trofeos.html"> <img src="../IMG/trofeos.png" height="250 px" alt="">
      <div class="texto-encima"><h1> Brawlers de <br> Camino de Trofeos</h1></div>
      </a>
    </div>
    <div style="position: absolute; top: 120px; left: 55%;">
      <a href="../raro/raro.html"> <img src="../IMG/raro.png" height="250 px" alt="">
      <div class="texto-encima"><h1>Brawlers <br> Poco Comunes</h1></div>
      </a>
    </div>
    <div style="position: absolute; top: 420px;left: 15%;">
      <a href="../super raro/super raro.html"> <img src="../IMG/super raro.png" height="250 px" alt="">
      <div class="texto-encima"><h1> Brawlers <br> Raros</h1></div>
      </a>
    </div>
    <div style="position: absolute; top: 420px; left: 55%;">
      <a href="../epico/epico.html"> <img src="../IMG/epico.png" height="250 px" alt="">
      <div class="texto-encima"><h1> Brawlers <br> Epicos</h1></div>
      </a>
    </div>
    <div style="position: absolute; top: 720px;left: 15%;">
      <a href="../mitico/mitico.html"> <img src="../IMG/mitico.png" height="250 px" alt="">
        <div class="texto-encima"><h1>Brawlers <br>  Miticos</h1></div>
      </a>
    </div>
    <div style="position: absolute; top: 720px; left: 55%;">
      <a href="../legendario/legendario.html"> <img src="../IMG/legendario.png" height="250 px" alt="">
        <div class="texto-encima"><h1> Brawlers <br> Legendarios</h1></div>
      </a>
    </div>
    <div style="position: absolute; top: 1070px; left: 35%;">
      <a href="../cromatico/cromatico.html"> <img src="../IMG/cromatico.png" height="250 px" alt="">
        <div class="texto-encima"><h1> Brawlers <br> Cromaticos</h1></div>
      </a>
    </div>
        <div>
          
        </div>
   
    
  </body>
</html>