<?php

header("Content-Type: application/json");
include 'conexion.php';

$data = json_decode(file_get_contents("php://input"), true);

// Validar campos obligatorios
$campos = ['nombre', 'apellido', 'cedula', 'email', 'username', 'password', 'rol_id', 'ubicacion_id'];
foreach ($campos as $campo) {
    if (empty($data[$campo])) {
        echo json_encode(['error' => "Falta el campo: $campo"]);
        exit;
    }
}

// Escapar e inicializar datos
$nombre = $conn->real_escape_string($data['nombre']);
$apellido = $conn->real_escape_string($data['apellido']);
$cedula = $conn->real_escape_string($data['cedula']);
$email = $conn->real_escape_string($data['email']);
$username = $conn->real_escape_string($data['username']);
$password = password_hash($data['password'], PASSWORD_DEFAULT); // Hash seguro
$rol_id = intval($data['rol_id']);
$ubicacion_id = intval($data['ubicacion_id']);

// Preparar la consulta (más seguro que insertar directo)
$sql = "INSERT INTO usuarios (nombre, apellido, cedula, email, username, password, rol_id, ubicacion_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo json_encode(['error' => 'Error al preparar la consulta: ' . $conn->error]);
    exit;
}

// Asociar los parámetros
$stmt->bind_param("ssssssii", $nombre, $apellido, $cedula, $email, $username, $password, $rol_id, $ubicacion_id);

// Ejecutar e informar
if ($stmt->execute()) {
    echo json_encode(['mensaje' => 'Usuario registrado con éxito']);
} else {
    echo json_encode(['error' => 'Error al registrar: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
