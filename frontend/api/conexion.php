<?php
$host = 'localhost';
$usuario = 'evidences';
$password = '12345';
$bd = 'retibo';

$conn = new mysqli($host, $usuario, $password, $bd);
if ($conn->connect_error) {
    die(json_encode(['error' => 'Error de conexión: ' . $conn->connect_error]));
}
?>