<link rel="stylesheet" type="text/css" media="screen" href="style.scss" />

<?php


$usuario = "root"; 
$password = ""; 
$servidor = "localhost"; 
$basededatos ="formulario";



 // Conectarse con el servidor

$conectar = mysqli_connect ('localhost', 'root', '', 'formulario') or die ("No se ha podido conectar con el servidor de Base de datos");

// $db = mysqli_select_db($conectar, $basededatos) or die ("Upps! Pues va a ser que no se ha podido conectar a la Base de datos");
// // Verificamos la conexion

// if(!$conectar){
    // echo "No se pudo conectar con el servidor";
// }else{

    // $base=mysql_select_db('formulario');
    // if(!$base){
        // echo "No se encontro la base de datos";
    // }
// }

// recuperamos las variables
$name = $_POST['name'];
$email= $_POST['email'];
$message = $_POST['message'];


// Ejecutamos la sentencia de sql

$sql = "INSERT INTO datos VALUES('$name',  
                                      '$email',
                                      '$message')";

$ejecutar=mysqli_query($conectar, $sql);

if(!$ejecutar){
    echo"There was an error in trying to send the message, please contact me through one of my social networks";
}else{
    echo"The message was sent correctly, I will answer as soon as possible <br><a href='index.html'>Back</a>"; }


?>
