<?php
session_start();

// Verificar si el usuario no está logueado
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header("Location: login.php"); // Redireccionar a la página de inicio de sesión
    exit();
}
// conecto a la BD
  $user = 'root';
  $password = ''; 
  $database = 'trofeos'; 
  $port = NULL;
  $mysqli = new mysqli('127.0.0.1', $user, $password, $database, $port);

  if ($mysqli->connect_error) {
      die('Connect Error (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

?>
<html>
    <head>
        
        <title>CAMINO DE TROFEOS</title>
        <link rel="stylesheet" type="text/css"href="../stilo.css">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    </head>
    <style>
        
        table,td,tr{
            border: 1px solid black;
        }
        td{
            -webkit-text-fill-color:rgb(255, 255, 255);
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: #000000;    
            font-family: verdana;
            font-size: 300%;
            }
        body
        {
           
             
           background-image:url('../IMG/fondoA.jpg') ;
           background-repeat: no-repeat;
           background-attachment: fixed;
           background-size: 100% 100%;
        }
        pre{
            background-color: rgba(128, 128, 128, 0.541);
    border: 4px solid black;
    border-radius: 0% 10% 10% 0%;
    padding: 20px;
        }
        
    </style>
     <body>
         <div style="position:absolute ; top:10px; left: 70%;" >
            <img src="../IMG/notaa.png" height="300px"alt="">
        </div>
        <div style="position: absolute;
        top: 110px;
        left: 74%;" >
            <h2>Ponga el mouse adentro <br> de una imagen...<i class="em em-eyes" aria-role="presentation" aria-label="EYES"></i></h2>
        </div>
<?php
 $top=250;
 $result = $mysqli->query('SELECT * from trofeos');//obtengo los Registron
 $mysqli->close();
 while ($row = $result->fetch_assoc()) { //itero por los Registros
    $nombre = $row['nombre']; 
    $descripcion = $row['descripcion'];
    $imgTOP = $row['img_top'];
    $imgDWN = $row['img_down'];
?>
        </div>
         <div style="position:absolute ; top:<?php echo $top ?>px; left:30%">
         <p><img alt="cambiar imagen" height="400px" 
                onmouseout="this.src='<?php echo $imgTOP ?>';this.style.height=400"
                 onmouseover="this.src='<?php echo $imgDWN ?>';this.style.height=200;" 
                 src="<?php echo $imgTOP ?>" /></p>
          </div>
          <div style="position:absolute ; top:<?php echo $top ?>px; left:50%" ><h1><?php echo $nombre ?></h1>
        <pre> 
<?php echo $descripcion ?>
<div style="position: absolute; top: 340px; left: 72%" >
    <a href="../skins/skins.php"><h5 class="button button1">skins</h5></a>
    </div>
        </pre> 
    </div>

<?php
$top=$top+500; // sumo 500 a $top
 }
 $result->close();
?>

<div >                
<a href="../Brawlers/brawlers.php"> <p><img  id="apartado1" alt="cambiar imagen" height="100px" 
onmouseout="this.src='../IMG/spike.jpg';"
    onmouseover="this.src='../IMG/emzboton.jpg';" 
    src="../IMG/spike.jpg" /></p>
</div>  
</div>
</div>
    </body>
  
    
    </html>