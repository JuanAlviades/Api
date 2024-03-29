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
}

// Obtener datos de la base de datos 
$sql = "SELECT ID, Nombre, Marca, Almacen FROM celulares";
$result = $conn->query($sql);

// Si hay resultados, formatearlos como JSON y devolverlos
if ($result->num_rows > 0) {
    $users = array();
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($users);
} else {
    echo "No users found";
}

$conn->close();

?>
