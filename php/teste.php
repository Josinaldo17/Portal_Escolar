<?php
// Configuração da conexão com o banco de dados
$host = '10.12.112.117';
$dbname = 'equipe2';
$username = 'root';
$password = '';

try {
    // Estabelece a conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para selecionar todos os alunos
    $stmt = $pdo->query("SELECT matricula_usuario, nome, telefone, cpf FROM alunos");

    // Recupera todos os resultados da consulta
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Em caso de erro, exibe uma mensagem
    echo "Erro ao conectar ou buscar dados: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Lista de Alunos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            background: #fff;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 10px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Alunos</h1>
    <?php if (count($alunos) > 0): ?>
        <table>
            <tr><th>Matrícula</th><th>Nome</th><th>Telefone</th><th>CPF</th></tr>
            <?php foreach ($alunos as $aluno): ?>
                <tr>
                    <td><?= htmlspecialchars($aluno['matricula_usuario']) ?></td>
                    <td><?= htmlspecialchars($aluno['nome']) ?></td>
                    <td><?= htmlspecialchars($aluno['telefone']) ?></td>
                    <td><?= htmlspecialchars($aluno['cpf']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum aluno cadastrado.</p>
    <?php endif; ?>
</body>
</html>
