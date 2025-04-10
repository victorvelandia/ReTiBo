<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Carga Composer si usas Composer

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..'); // Subimos dos niveles desde api/
$dotenv->load();

$host = $_ENV['DB_HOST'];
$usuario = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$bd = $_ENV['DB_NAME'];

$conn = new mysqli($host, $usuario, $pass, $bd);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Error de conexión: ' . $conn->connect_error]));
}

