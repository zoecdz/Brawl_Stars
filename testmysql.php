<?php


$resultado = VerificoLogin("tron","20682069");

if ($resultado){
    echo("EXISTE !!!");
}else{
    echo("NO ESTA !!");
}
exit();

function VerificoLogin($name,$pass){

    $user = 'root';
    $password = ''; //To be completed if you have set a password to root
    $database = 'cuenta'; //To be completed to connect to a database. The database must exist.
    $port = NULL; //Default must be NULL to use default port
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
