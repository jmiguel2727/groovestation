<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('connection.php');

    // Obtém os dados do formulário
    $nome       = $_POST['nome'];
    $apelido    = $_POST['apelido'];
    $contacto   = $_POST['contacto'];
    $email      = $_POST['email'];
    $morada     = $_POST['morada'];
    $codigopostal = $_POST['codigoPostal'];
    $localidade = $_POST['localidade'];
    $nif = $_POST['nif'];
    $compraId = $_POST['compraId'];
    $cartItems = json_decode($_POST['cartItems'], true);

    // Insere os dados da compra na tabela compras
    $query = "INSERT INTO compras (compra_id, nome, apelido, contacto, email, morada, codigopostal, localidade, nif) 
              VALUES (:compraId, :nome, :apelido, :contacto, :email, :morada, :codigopostal, :localidade, :nif)";

    try {
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':compraId', $compraId);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':apelido', $apelido);
        $stmt->bindParam(':contacto', $contacto);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':morada', $morada);
        $stmt->bindParam(':codigopostal', $codigopostal);
        $stmt->bindParam(':localidade', $localidade);
        $stmt->bindParam(':nif', $nif);
        $stmt->execute();

        // Insere os itens do carrinho na tabela artigos_compra
        foreach ($cartItems as $item) {
            $queryItem = "INSERT INTO artigos_compra (compra_id, produto_id, quantidade) 
                          VALUES (:compraId, :produtoId, :quantidade)";
            $stmtItem = $dbh->prepare($queryItem);
            $stmtItem->bindParam(':compraId', $compraId);
            $stmtItem->bindParam(':produtoId', $item['id']);
            $stmtItem->bindParam(':quantidade', $item['quantity']);
            $stmtItem->execute();
        }

        // Limpa o carrinho após a compra
        echo "<script>localStorage.removeItem('cart'); localStorage.removeItem('compraId');</script>";

        // Redireciona para index.php com um parâmetro na URL
        header("Location: ../index.php?compra_finalizada=true");
        exit(); // Certifique-se de que o script pare de ser executado após o redirecionamento
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>