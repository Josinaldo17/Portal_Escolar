<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';
    $number = $_POST['number'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmpassword = $_POST['Confirmpassword'] ?? '';
    $gender = $_POST['gender'] ?? '';

        echo "Dados recebidos com sucesso:<br>";
        echo "Nome: $firstname $lastname<br>";
        echo "E-mail: $email<br>";
        echo "Celular: $number<br>";
        echo "Gênero: $gender<br>";
    }
?>