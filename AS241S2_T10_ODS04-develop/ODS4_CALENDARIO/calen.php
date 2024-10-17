<?php
$host = 'localhost'; // Si estás trabajando en un servidor local.
$user = 'root'; // El nombre de usuario que has creado para la base de datos.
$password = '23032007'; // La contraseña del usuario de MySQL.
$database = 'mysql_db'; // Nombre de la base de datos.

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener eventos
    $sql = "SELECT * FROM eventos";
    $result = $conn->query($sql);

    $eventos = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $eventos[] = $row;
        }
    }
    echo json_encode($eventos);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Agregar evento
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['
}