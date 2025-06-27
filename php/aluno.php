<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['number'])) {
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $email = htmlspecialchars($_POST['email']);
        $number = htmlspecialchars($_POST['number']);

        echo "<h1>Aluno Cadastrado:</h1>";
        echo "<p><strong>Nome:</strong> $firstname $lastname</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Celular:</strong> $number</p>";
    } else {
        echo "<h1>Erro: Todos os campos devem ser preenchidos.</h1>";
    }
} else {
    echo "<h1>Erro: Método de requisição inválido.</h1>";
}
?>
