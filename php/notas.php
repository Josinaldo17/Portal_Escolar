<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nota1'], $_POST['nota2'], $_POST['nota3'], $_POST['nota4'])) {
        $nota1 = floatval($_POST['nota1']);
        $nota2 = floatval($_POST['nota2']);
        $nota3 = floatval($_POST['nota3']);
        $nota4 = floatval($_POST['nota4']);

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo "<h1>Média das notas: " . number_format($media, 2) . "</h1>";
    } else {
        echo "<h1>Erro: Preencha todas as notas corretamente.</h1>";
    }
} else {
    echo "<h1>Erro: Método de requisição inválido.</h1>";
}
?>
