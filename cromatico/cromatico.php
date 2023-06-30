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
  $database = 'cromatico'; 
  $port = NULL;
  $mysqli = new mysqli('127.0.0.1', $user, $password, $database, $port);

  if ($mysqli->connect_error) {
      die('Connect Error (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

?>
<html>
<head>
    
    <title>CROMATICO</title>
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
<?php
 $top=250;
 $result = $mysqli->query('SELECT * from cromatico');//obtengo los Registron
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
     <script>
        document.getElementById("croma").onmouseover = function() {mouseOver()};
        document.getElementById("croma").onmouseout = function() {mouseOut()};
        let texto_original;
        function mouseOver() {
          obj=document.getElementById("croma");
          obj.style.color="red";
            texto_original=obj.innerHTML;
          obj.innerHTML ="nada";
        }
        
        function mouseOut() {
          obj=document.getElementById("croma");
            obj.innerHTML=texto_original;
        }
        </script>
    </body>

</html>
