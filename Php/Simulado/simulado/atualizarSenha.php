<?php

// Conexão com o banco de dados
$pdo = new PDO('mysql:host=127.0.0.1; dbname=alatechmachines', 'root', '');

// Consulta para buscar todos os usuários com suas senhas
$stmt = $pdo->query("SELECT id, password FROM user");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Criptografar a senha usando Bcrypt
    $bcryptPassword = password_hash($row['password'], PASSWORD_BCRYPT);

    // Atualizar a senha criptografada no banco de dados
    $updateStmt = $pdo->prepare("UPDATE user SET password = :password WHERE id = :id");
    $updateStmt->execute([
        'password' => $bcryptPassword,
        'id' => $row['id'],
    ]);
}

echo "Senhas criptografadas com sucesso!";
