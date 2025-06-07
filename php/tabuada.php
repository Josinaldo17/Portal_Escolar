<?php
echo "<h2>Tabuada Completa de 1 a 10</h2>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";

// Cabeçalho da tabela
echo "<tr>";
echo "<th>Multiplicador</th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Corpo da tabela
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td><strong>$i</strong></td>"; // Linha do multiplicador
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "<td>$resultado</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
