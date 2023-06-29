<?php
session_start();

// Verificar si el formulario de inicio de sesión ha sido enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   // Verificar si los índices 'user' y 'pass' existen en $_POST
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $usuario = $_POST['user'];
        $contrasena = $_POST['pass'];

        // Verificar si el usuario y la contraseña son correctos 
        if (VerificoLogin($usuario, $contrasena)) {
            $_SESSION['logueado'] = true;
            header("Location: index.php"); // Redireccionar a la página inicial
            exit();
        } else {
            $error = "Usuario o contraseña incorrectos.";
        }
    } else {
        $error = "Faltan los datos de usuario o contraseña.";
    }
}



function VerificoLogin($name,$pass){

  $user = 'root';
  $password = ''; 
  $database = 'cuenta'; 
  $port = NULL;
  $mysqli = new mysqli('127.0.0.1', $user, $password, $database, $port);

  if ($mysqli->connect_error) {
      die('Connect Error (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }
// chequeo si $name y $pass existen el la BD
  $result = $mysqli->query('SELECT * from cuenta WHERE Nombre = "'.$name.'" AND Contraseña = "'.$pass.'";');
  $row = $result->fetch_row();
  $mysqli->close();
  if ($row) {
          // existe !!          
      return TRUE;          
      } else {         
          return FALSE;
      }
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
 <div class="container" >
   <h2>Ingresa a la Web de Brawl Stars</h2>
   
   <form method="post" action="" id="loginForm">
     <input type="text" name="user" placeholder="Nombre de usuario" required>
     <input type="password" name="pass" placeholder="Contraseña" required>
     <input type="submit" value="Iniciar sesión">
     <?php if (isset($error)): ?>
    <p style="color:red;background-color: bisque;text-align: center;"><?php echo $error; ?></p>
      <?php endif; ?>

   </form>
 </div>    
</body>
</html>
