<?php

// Conexión a la base de datos (ejemplo)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angular";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "¡Conexión exitosa a la base de datos!";
}

// Cerrar conexión
$conn->close();

?>
