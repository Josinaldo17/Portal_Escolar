<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sala = $_POST["sala"] ?? "";
    $professor = $_POST["professor"] ?? "";
    $aluno = $_POST["aluno"] ?? "";
    $nota1 = $_POST["nota1"] ?? "";
    $nota2 = $_POST["nota2"] ?? "";
    $nota3 = $_POST["nota3"] ?? "";
    $nota4 = $_POST["nota4"] ?? "";
    $media = $_POST["media"] ?? "";

    echo "<h2>Dados Recebidos:</h2>";
    echo "Sala: $sala<br>";
    echo "Professor: $professor<br>";
    echo "Aluno: $aluno<br>";
    echo "Nota 1: $nota1<br>";
    echo "Nota 2: $nota2<br>";
    echo "Nota 3: $nota3<br>";
    echo "Nota 4: $nota4<br>";
    echo "Média: $media<br>";
}
?>