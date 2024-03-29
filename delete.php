<?php

// Conexión a la base de datos (ejemplo)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angular";

$conn = new mysqli($servername, $username, $password, $dbname);


$id_usuario = 1; 

// Consulta SQL para insertar un nuevo usuario
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
