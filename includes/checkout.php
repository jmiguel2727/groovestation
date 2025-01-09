<?php
// Verifica se o método de requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Inclui o arquivo de conexão com o banco de dados
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

    // Prepara a query SQL para inserir os dados na tabela compras
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

        // Redireciona para a página index.php após a inserção
        header('Location: ../index.php?compra_finalizada=true');
        exit(); // Certifique-se de sair do script após o redirecionamento
    } catch (PDOException $e) {
        echo "Erro ao inserir dados: " . $e->getMessage();
    }
}
?>
