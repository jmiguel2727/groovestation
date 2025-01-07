<?php
include('connection.php');

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['action']) && isset($data['productId'])) {
    $action = $data['action'];
    $productId = $data['productId'];
    $compraId = $data['compraId'];
    try {
        if ($action === "add") {
            $quantity = $data['quantity'] ?? 1; // Quantidade enviada pelo cliente
            $query = "UPDATE produtos SET Quantidade = Quantidade + :quantity WHERE Id = :productId";
            $stmt = $dbh->prepare($query);
            $stmt->bindParam(':productId', $productId, PDO::PARAM_INT);
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
            $stmt->execute();

            $query = "INSERT INTO artigos_compra(compra_id, produto_id, qtty) 
            VALUES(:C, :P, :Q)";
            $stmt = $dbh->prepare($query);
            $stmt->bindValue(':C', $compraId);
            $stmt->bindParam(':P', $productId);
            $stmt->bindParam(':Q', $quantity);
            $stmt->execute();

            echo $compraId;


        } elseif ($action === "remove") {
            $query = "UPDATE produtos SET Quantidade = GREATEST(Quantidade - 1, 0) WHERE Id = :productId";
            $stmt = $dbh->prepare($query);
            $stmt->bindParam(':productId', $productId, PDO::PARAM_INT);
            $stmt->execute();
        }
    } catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}
?>