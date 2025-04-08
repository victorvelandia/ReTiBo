<?php
header("Content-Type: application/json");
session_start();
include_once 'conexion.php';

$data = json_decode(file_get_contents("php://input"), true);
$username = $conn->real_escape_string($data['username']);
$password = $data['password'];

$sql = "SELECT id, nombre, password FROM usuarios WHERE username = '$username'";
$result = $conn->query($sql);

if ($result && $result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['usuario_nombre'] = $user['nombre']; // 👈 Se guarda el nombre
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['error' => 'Contraseña incorrecta']);
    }
} else {
    echo json_encode(['error' => 'Usuario no encontrado']);
}

$conn->close();

