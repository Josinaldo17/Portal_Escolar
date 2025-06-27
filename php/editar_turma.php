<?php
// Conexão com o banco
$host = 'localhost';
$dbname = 'escola';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
    exit;
}

// Recebendo os dados do formulário
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];

// Atualizando o aluno
$sql = "UPDATE alunos SET nome = ?, telefone = ?, cpf = ? WHERE matricula_usuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome, $telefone, $cpf, $matricula]);

// Redirecionando
header("Location: ../templates/adm_alunos.php");
exit;
?>
