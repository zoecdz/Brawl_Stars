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
    
    <title>SKINS</title>
    <link rel="stylesheet" type="text/css"href="../stilo.css">
</head>
  <style>
    .button2{
            background-color:rgba(84, 106, 230, 0.768);
            color:black;
            border:solid;
        }
    h1{ 
            -webkit-text-fill-color:rgb(0, 0, 0);
           
                
}
    body
    { 
       background-image:url('../IMG/FondoA.jpg') ;
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
      <li> <a href="../actualizaciones/actualizaciones.php" >Actualizaciones</a></li>
</ul>
<div  style="position:absolute ; top:60px; left:22%;">
    <h2 class="button2" > <b> Estas son las diferentes skins que pueden tener los brawlers Ninguna busca <br> 
        ser igual a otra pero pueden compartir la tematica relacionadas a una festividad,<br> por ejemplo en <span style="color:rgba(247, 
        173, 35, 0.715);"> dia de brujas</span>, <span style="color:rgba(220, 220, 220, 0.726);">navidad</span>,
        o <span style="color:rgba(243, 247, 34, 0.726);">el 
        año nuevo chino</span> por decir algunas</b>
    </h2>
</div>
<div style="position: absolute; top:200px; left:5%;">
  <h1>skins de "Shelly"</h1>
</div>
  <div style="position: absolute; top:250px; left:5%;">
    <br><br>
    <img src="../img skins/shestar.webp" height="300"> 
      <img src="../img skins/shebandita.webp" height="300"> 
      <img src="../img skins/sheBJr.webp" height="300">
      <img src="../img skins/sheAmerica.webp" height="300">
      <img src="../img skins/sheChile.webp" height="300"> 
      <img src="../img skins/shePSG.webp" height="300">    
      <img src="../img skins/sheWitch.webp" height="300"> 
    </div>
    <div style="position: absolute; top:600px; left:5%;">
      <h1>skins de "Nita y su oso"</h1>
    </div>
      <div style="position: absolute; top:700px; left: 5%;">
        <br><br>
          <img alt="cambiar imagen" height="250px;" 
               onmouseout="this.src='../img skins/niKoala.webp' ;"
                onmouseover="this.src='../img skins/osoKoala.webp';" 
                src="../img skins/niKoala.webp" />
                <img alt="cambiar imagen" height="250px;" 
               onmouseout="this.src='../img skins/nipanda.webp' ;"
                onmouseover="this.src='../img skins/osopanda.webp';" 
                src="../img skins/nipanda.webp" />
                <img alt="cambiar imagen" height="250px;" 
               onmouseout="this.src='../img skins/niRed Nose.webp' ;"
                onmouseover="this.src='../img skins/osoRed Nose.webp';" 
                src="../img skins/niRed Nose.webp" />
                <img alt="cambiar imagen" height="250px;" 
               onmouseout="this.src='../img skins/niNian.webp' ;"
                onmouseover="this.src='../img skins/osoNian.webp';" 
                src="../img skins/niNian.webp" />
                <img alt="cambiar imagen" height="250px;" 
               onmouseout="this.src='../img skins/niShiba.webp' ;"
                onmouseover="this.src='../img skins/osoShiba.webp';" 
                src="../img skins/niShiba.webp" />
                <img alt="cambiar imagen" height="250px;" 
               onmouseout="this.src='../img skins/niWhale Watch.webp' ;"
                onmouseover="this.src='../img skins/osowahle watch.webp';" 
                src="../img skins/niWhale Watch.webp" />
         </div>
         <div style="position: absolute; top:1100px; left:5%;">
          <h1>skins de "Colt"</h1>
        </div>
          <div style="position: absolute; top:1200px; left:5%;">
            <br><br>
            <img src="../img skins/coltRockstar.webp" height="300"> 
              <img src="../img skins/coltClub America.webp" height="300"> 
              <img src="../img skins/coltHandsome.webp" height="300">
              <img src="../img skins/coltCorsair.webp" height="300">
              <img src="../img skins/coltAtl. Nacional.webp" height="300">    
              <img src="../img skins/coltRoyal Agent.webp" height="300"> 
              <img src="../img skins/coltRiver Plate.webp " height="300">
              <img src="../img skins/colt.webp " height="300">  
              <img src="../img skins/coltChallenger.webp " height="300"> 
            </div>  
            <div style="position: absolute; top:1900px; left:5%;">
              <h1>skins de "Bull"</h1>
            </div>
              <div style="position: absolute; top:2000px; left:5%;">
                <br><br>
                <img src="../img skins/bullBarbarian King.webp" height="300"> 
                  <img src="../img skins/bullLinebacker.webp" height="300"> 
                  <img src="../img skins/bullTouchdown.webp" height="300">
                  <img src="../img skins/bullLion.webp" height="300">
                  <img src="../img skins/bullSpace Ox.webp " height="300">    
                  <img src="../img skins/bullB-800.webp " height="300"> 
                  <img src="../img skins/bullViking.webp " height="300"> 
                </div>  
                <div style="position: absolute; top:2700px; left:5%;">
                  <h1>skins de "Jessy y Sparky"</h1>
                </div>
                  <div style="position: absolute; top:2800px; left: 5%;">
                    <br><br>
                      <img alt="cambiar imagen" height="250px;" 
                           onmouseout="this.src='../img skins/JessyRed Dragon.webp' ;"
                            onmouseover="this.src='../img skins/JessyrRed Dragon.webp';" 
                            src="../img skins/JessyRed Dragon.webp" />
                            <img alt="cambiar imagen" height="250px;" 
                           onmouseout="this.src='../img skins/JessySummer.webp' ;"
                            onmouseover="this.src='../img skins/JessyrSummer.webp';" 
                            src="../img skins/JessySummer.webp" />
                            <img alt="cambiar imagen" height="250px;" 
                           onmouseout="this.src='../img skins/JessyTanuki.webp' ;"
                            onmouseover="this.src='../img skins/JessyrTanuki.webp';" 
                            src="../img skins/JessyTanuki.webp" />
                            <img alt="cambiar imagen" height="250px;" 
                           onmouseout="this.src='../img skins/JessyDragon Knight.webp' ;"
                            onmouseover="this.src='../img skins/JessyrDragon Knight.webp';" 
                            src="../img skins/JessyDragon Knight.webp" />
                            <img alt="cambiar imagen" height="250px;" 
                           onmouseout="this.src='../img skins/JessyShadow Knight.webp' ;"
                            onmouseover="this.src='../img skins/JessyrShadow Knight.webp';" 
                            src="../img skins/JessyShadow Knight.webp" />
                            <img alt="cambiar imagen" height="250px;" 
                           onmouseout="this.src='../img skins/JessyCat Burglar.webp' ;"
                            onmouseover="this.src='../img skins/JessyrCat Burglar.webp';" 
                            src="../img skins/JessyCat Burglar.webp" />
                     </div>
                     
                      <div style="position: absolute; top:3100px; left:5%;">
                        <h1>skins de "Dinamike"</h1>
                      </div>
                        <div style="position: absolute; top:3200px; left:5%;">
                          <br><br>
                          <img src="../img skins/dinaClassic.webp" height="300"> 
                          <img src="../img skins/dinaFlamengo Mike.webp" height="300"> 
                            <img src="../img skins/dinaChivas Mike.webp" height="300">
                            <img src="../img skins/dinaCoach Mike.webp" height="300">
                            <img src="../img skins/dinaMoldy Mike.webp " height="300">    
                            <img src="../img skins/dinaPSG Mike.webp" height="300"> 
                            <img src="../img skins/dinaRobo Mike.webp" height="300">
                            <img src="../img skins/dinaSantamike.webp" height="300">
                            <img src="../img skins/dinaSpicy Mike.webp" height="300">
                            <img src="../img skins/dinaBellhop Mike.webp" height="300">
                            <img src="../img skins/DinaLDU Quito Mike.webp" height="300">
                          </div> 
<div style="position: absolute; top:4200px; left:5%;">
<h1>skins de "Brock"</h1>
</div>
<div style="position: absolute; top:4300px; left:5%;">
                              <br><br>
 <img src="../img skins/brockBeach.webp" height="300"> 
  <img src="../img skins/brockBoom Box.webp" height="300"> 
<img src="../img skins/brockHot Rod.webp" height="300">
<img src="../img skins/brockLion Dance.webp" height="300">
<img src="../img skins/brockOld School.webp " height="300">    
<img src="../img skins/brockSuper Ranger.webp" height="300"> 

</div> 

<div style="position: absolute; top:5000px; left:5%;">
  <h1>skins de "Bo"</h1>
  </div>
  <div style="position: absolute; top:5100px; left:5%;">
                                <br><br>
   <img src="../img skins/boWarrior.webp" height="300"> 
    <img src="../img skins/boGold Mecha.webp" height="300"> 
  <img src="../img skins/boLight Mecha.webp" height="300">
  <img src="../img skins/boMecha.webp" height="300">
  <img src="../img skins/boHo Ho Ho.webp" height="300">    
  <img src="../img skins/boHorus.webp" height="300">    
  <img src="../img skins/boUnderworld.webp" height="300">    
  <img src="../img skins/boWasp.webp" height="300"> 
  
  </div>        
  <div style="position: absolute; top:5800px; left:5%;">
    <h1>skins de "Tick"</h1>
    </div>
    <div style="position: absolute; top:5900px; left:5%;">
                                  <br><br>
     <img src="../img skins/tickSnowman.webp" height="300"> 
      <img src="../img skins/tickKing Crab.webp" height="300">  
    </div>        
    <div style="position: absolute; top:6300px; left:5%;">
      <h1>skins de "EMZ"</h1>
      </div>
      <div style="position: absolute; top:6400px; left:5%;">
                                    <br><br>
       <img src="../img skins/emzCollege.webp" height="300"> 
        <img src="../img skins/emzSuper Fan.webp" height="300">  
      </div>     
      <div style="position: absolute; top:6800px; left:5%;">
        <h1>skins de "Stu"</h1>
        </div>
        <div style="position: absolute; top:6900px; left:5%;">
                                      <br><br>
         <img src="../img skins/stuHeadless Rider.webp" height="300"> 
          <img src="../img skins/stuSuperstar.webp" height="300">  
          <img src="../img skins/stuWicked.webp" height="300">
        </div>
        
        <div>
          <div style="position: absolute; top:7400px; left:5%;">
            <h1>skins de "Barley"</h1>
            </div>
            <div style="position: absolute; top:7500px; left:5%;">
                                          <br><br>
             <img src="../img skins/bakesale.webp" height="300"> 
              <img src="../img skins/Barleyma.webp" height="300"> 
            <img src="../img skins/barReWazard.webp" height="300">
            <img src="../img skins/BarSwayMaster.webp" height="300">
            <img src="../img skins/Bgolden.webp" height="300">    
            <img src="../img skins/baMaple.webp" height="300">    
            <img src="../img skins/BunicornK.webp" height="300"> 
            
            </div>        
        </div>
        <div>
          <div style="position: absolute; top:8200px; left:5%;">
            <h1>skins de "El Primo"</h1>
            </div>
            <div style="position: absolute; top:8300px; left:5%;">
                                          <br><br>
             <img src="../img skins/pocoPirate.webp" height="300"> 
              <img src="../img skins/pocoPoco Starr.webp" height="300"> 
            <img src="../img skins/pocoSerenade.webp" height="300">
            <img src="../img skins/pocoTrash.webp" height="300"> 
           
            
            </div>        
            <div>
              <div style="position: absolute; top:8700px; left:5%;">
                <h1>skins de "El Primo"</h1>
                </div>
                <div style="position: absolute; top:8800px; left:5%;">
                                              <br><br>
                 <img src="../img skins/El Brown.webp" height="300"> 
                  <img src="../img skins/primoEl Primo Universitario.webp" height="300"> 
                <img src="../img skins/El Primo Club Nacional.webp" height="300">
                <img src="../img skins/El Primo Corinthians.webp" height="300">
                <img src="../img skins/El Rey Primo.webp" height="300">    
                <img src="../img skins/El Rudo Primo.webp" height="250">    
               
                
                </div>        
                <div>
                  <div style="position: absolute; top: 9300px; left:5%;">
                    <h1>skins de "Rosa"</h1>
                    </div>
                    <div style="position: absolute; top:9400px; left:5%;">
                                                  <br><br>
                     <img src="../img skins/rosaBrawl-o-ween.webp" height="300"> 
                      <img src="../img skins/rosaCoco.webp" height="300"> 
                    <img src="../img skins/rosaMajor.webp" height="300">
                    <img src="../img skins/rosaMantis.webp" height="300"> 
                    </div>    
                    <div>
                      <div style="position: absolute; top: 10000px; left:5%;">
                        <h1>skins de "Rosa"</h1>
                        </div>
                        <div style="position: absolute; top:10100px; left:5%;">
                                                      <br><br>
                         <img src="../img skins/darrylCrash Test.webp" height="300"> 
                          <img src="../img skins/darrylD4R-RY1.webp" height="300"> 
                        <img src="../img skins/darrylDumpling.webp" height="300">
                        <img src="../img skins/darrylMascot.webp" height="300"> 
                        </div>    
            
  
    
</body>

</html>