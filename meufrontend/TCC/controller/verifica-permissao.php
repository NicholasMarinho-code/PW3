<?php
ini_set('display_errors', 0);  // impede o PHP de printar erros como HTML
error_reporting(0);

require_once("../config.php");

header('Content-Type: application/json');

// Garante que qualquer erro do PHP/PDO saia como JSON, e não como texto puro
try {
    $email = $_GET['email'] ?? '';

    if (empty($email)) {
        echo json_encode(['error' => 'Email nao fornecido', 'funcao' => null]);
        exit;
    }

    $stmt = $pdo->prepare("
        SELECT funcao 
        FROM usuario 
        WHERE LOWER(emailcorp) = LOWER(:email)
    ");

    $stmt->execute([
        ':email' => $email
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode([
        'funcao' => $user['funcao'] ?? null
    ]);

} catch (PDOException $e) {
    // Se o banco falhar, ele devolve o erro real formatado em JSON
    http_response_code(500);
    echo json_encode([
        'error' => 'Erro no banco de dados',
        'detalhes' => $e->getMessage(),
        'funcao' => null
    ]);
}