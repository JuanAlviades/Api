<?php

// Conexión a la base de datos (ejemplo)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angular";

$conn = new mysqli($servername, $username, $password, $dbname);

// Datos del nuevo usuario

$nombre = $_POST['Nombre'];
$marca = $_POST['Marca'];
$almacen = $_POST['Almacen'];


// Consulta SQL para insertar un nuevo usuario
$sql = "INSERT INTO celulares ( Nombre, Marca, Almacen) VALUES ( '$nombre', '$marca', '$almacen')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Nuevo usuario agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>
