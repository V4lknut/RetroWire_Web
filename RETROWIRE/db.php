<?php
$host = 'localhost'; // Cambia esto si tu servidor MySQL está en otro host
$username = 'retrowire_user'; // Cambia esto por tu usuario de MySQL
$password = 'retropass'; // Cambia esto por tu contraseña de MySQL
$database = 'retrowire'; // Cambia esto por el nombre de tu base de datos

// Establecer la conexión
$conn = new mysqli($host, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}
?>
