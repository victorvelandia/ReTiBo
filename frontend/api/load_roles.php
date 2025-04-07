<?php
header('Content-Type: application/json');

$host = 'localhost';
$usuario = 'evidences';
$password = '12345';
$bd = 'retibo';

$conn = new mysqli($host, $usuario, $password, $bd);

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
?>
