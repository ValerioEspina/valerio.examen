<?php


const TITULOWEB="DDBB Alumni.Valerio.";

//Consultas a la base de datos

//Cómo se usa:
// $sql="SELECT * FROM alumnos LIMIT 20 ORDER DESC";
// consulta($sql);


function consulta($sql){

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "valerio";

// Conectamos a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificamos la conexión
if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}

//$sql = "SELECT * FROM alumnos";
$resultado = $conn->query($sql);

return $resultado;

$conn->close();

}











?>