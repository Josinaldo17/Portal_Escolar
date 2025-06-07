<?php

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=escola", "root", "");
    
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO alunos (nome_aluno, email_aluno) VALUES (:nome, :email)");
    $stmt->execute(['nome' => $nome, 'email' => $email]);

    $resposta = ['status' => 'Sucesso', 'mensagem' => 'Usuário cadastrado com sucesso!'];
	} catch (PDOException $e) {
		$resposta = ['status' => 'Erro', 'mensagem' => 'Erro ao cadastrar: ' . $e->getMessage()];
	}

	header('Content-Type: application/json');
	echo json_encode($resposta);
?>
