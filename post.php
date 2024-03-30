<?php

// Conexión a la base de datos (ejemplo)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angular";

$conn = new mysqli($servername, $username, $password, $dbname);

// Crearemos variables donde desde el postman se alojarán los valores

$nombre = $_POST['Nombre'];
$marca = $_POST['Marca'];
$almacen = $_POST['Almacen'];

// Desde esta consulta, tomaremos los valores que se alojaron de postman para hacer la publicación
$sql = "INSERT INTO celulares ( Nombre, Marca, Almacen) VALUES ( '$nombre', '$marca', '$almacen')";

// En el siguiente código podremos ejecutar el comando para rectificar que funcione todo perfectamente
if ($conn->query($sql) === TRUE) {
    echo "Nuevo usuario agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>
