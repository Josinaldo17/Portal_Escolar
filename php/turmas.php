<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroSala = isset($_POST['number']) ? $_POST['number'] : '';
    $nomeSala = isset($_POST['nsala']) ? $_POST['nsala'] : '';
    $professor = isset($_POST['nprofessor']) ? $_POST['nprofessor'] : '';

    echo "<h2>Dados da turma:</h2>";
    echo "<p><strong>Número da Sala:</strong> " . htmlspecialchars($numeroSala) . "</p>";
    echo "<p><strong>Nome da Sala:</strong> " . htmlspecialchars($nomeSala) . "</p>";
    echo "<p><strong>Professor:</strong> " . htmlspecialchars($professor) . "</p>";
}
?>
