<?php
header('Content-Type: application/json');

include_once 'conexion.php';

if ($conn->connect_error) {
    echo json_encode(['error' => 'Error de conexión: ' . $conn->connect_error]);
    exit;
}

$sql = "SELECT id, rol FROM rol";
$result = $conn->query($sql);

$roles = [];

while ($row = $result->fetch_assoc()) {
    $roles[] = $row;
}

echo json_encode($roles);
$conn->close();

