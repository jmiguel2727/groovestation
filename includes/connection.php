<?php
$user = 'web';
$pass = 'web'; 
$database = 'grupo205';

try {
    $dbh = new PDO('mysql:host=localhost;charset=utf8;dbname=' . $database, $user, $pass);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}
?>