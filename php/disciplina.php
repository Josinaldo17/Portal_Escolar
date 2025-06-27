<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['disciplina']) && !empty($_POST['disciplina'])) {
        $disciplina = htmlspecialchars($_POST['disciplina']);
        echo "<h1>Disciplina cadastrada: $disciplina</h1>";
    } else {
        echo "<h1>Erro: Você deve preencher o nome da disciplina.</h1>";
    }
} else {
    echo "<h1>Erro: Método de requisição inválido.</h1>";
}
?>
