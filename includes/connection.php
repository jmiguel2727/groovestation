<?php
$user = 'root'; // Substitua pelo usuário do banco de dados
$pass = '';     // Substitua pela senha do banco de dados
$database = 'GrooveStationBD'; // Certifique-se de que o nome do banco está correto

try {
    $dbh = new PDO('mysql:host=localhost;charset=utf8;dbname=' . $database, $user, $pass);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}
?>
