<?php

// Conexión a la base de datos (ejemplo)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angular";

$conn = new mysqli($servername, $username, $password, $dbname);

// Datos actualizados del usuario
$ID= $_POST['ID']; 
$nuevo_Nombre = $_POST['Nombre'];
$nuevo_Marca = $_POST['Marca'];
$nuevo_Almacen = $_POST['Almacen'];

// Construir la consulta SQL para la actualización
$sql = "UPDATE celulares SET Nombre = '$nuevo_Nombre', Marca = '$nuevo_Marca', Almacen = '$nuevo_Almacen' WHERE ID = $ID";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "¡Usuario Actualizado!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>
