<?php
include('connection.php');

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['action']) && isset($data['productId'])) {
    $action = $data['action'];
    $productId = $data['productId'];
    $compraId = $data['compraId'];
    $qtty = 1;
    try {
        if ($action === "add") {

            $query = "INSERT INTO artigos_compra(compra_id, produto_id, quantidade)   VALUES(:C, :P, :Q)";
            $stmt = $dbh->prepare($query);
            $stmt->bindValue(':C', $compraId);
            $stmt->bindParam(':P', $productId);
            $stmt->bindParam(':Q', $qtty);
            $stmt->execute();

        } 
    } catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}
?>