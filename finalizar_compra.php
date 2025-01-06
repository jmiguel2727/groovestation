<?php
// Ativar exibição de erros para depuração (remover em produção)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configurar o cabeçalho para JSON
header('Content-Type: application/json');

try {
    // Verificar se os dados foram enviados
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if (!$data || !isset($data['cliente']) || !isset($data['cart'])) {
        throw new Exception("Dados inválidos recebidos.");
    }

    // Extrair os dados do cliente e do carrinho
    $cliente = $data['cliente'];
    $cart = $data['cart'];

    // sucesso
    $response = [
        'success' => true,
        'message' => 'Compra finalizada com sucesso!'
    ];

    // Retornar resposta JSON
    echo json_encode($response);
} catch (Exception $e) {
    // Retornar erro em formato JSON
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}