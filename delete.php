<?php

// Conexión a la base de datos (ejemplo)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angular";

$conn = new mysqli($servername, $username, $password, $dbname);

//Agregaremos esta sección del código para poder alojar el dato que le damos desde postman
$id_usuario = $_GET['id'];

// Consulta SQL para eliminar el ID con el que seleccionamos en la tabla 
$sql = "DELETE FROM celulares WHERE ID = $id_usuario";


// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Usuario eliminado correctamente";
} else {
    echo "Error al eliminar el usuario: " . $conn->error;
}


// Cerrar la conexión
$conn->close();

?>
