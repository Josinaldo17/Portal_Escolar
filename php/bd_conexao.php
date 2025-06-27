<?php
$host = "localhost";
$usuario = "root";
$senha = ""; // ou sua senha do MySQL
$banco = "escola";

$conn = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
