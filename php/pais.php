<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = isset ($_POST['firstname']) ? $_POST['firstname'] : '';
        $lastname = isset ($_POST['lastname']) ? $_POST['lastname'] : '';
        $email = isset ($_POST['email']) ? $_POST['email'] : '';
        $numero = isset ($_POST['number']) ? $_POST['number'] : '';
        $senha = isset ($_POST['password']) ? $_POST['password'] : '';

    echo "<h2>Dados dos Pais:</h2>";
    echo "<p><strong>Primeiro Nome:</strong> " . htmlspecialchars($firstname) . "</p>";
    echo "<p><strong>Ultimo Nome:</strong> " . htmlspecialchars($lastname) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Número de Telefone:</strong> " . htmlspecialchars($numero) . "</p>";
    echo "<p><strong>Sua Senha:</strong> " . htmlspecialchars($senha) . "</p>";
}
?>