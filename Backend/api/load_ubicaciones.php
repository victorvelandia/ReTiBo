<?php
header('Content-Type: application/json');
include_once 'conexion.php';

$sql = "SELECT id, ciudad, ubicacion FROM ubicacion";
$result = $conn->query($sql);

$ubicaciones = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $ubicaciones[] = [
            'id' => $row['id'],
            'texto' => $row['ciudad'] . ' - ' . $row['ubicacion']
        ];
    }
}

echo json_encode($ubicaciones);
$conn->close();

