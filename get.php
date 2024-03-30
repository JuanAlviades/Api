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

// Desde esta consulta, simplemente vamos a traer los datos que tengamos en la base de datos
$sql = "SELECT ID, Nombre, Marca, Almacen FROM celulares";
$result = $conn->query($sql);

// En el siguiente código podremos ejecutar el comando para rectificar que funcione todo perfectamente
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
