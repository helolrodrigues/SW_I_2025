<?php
if ($_POST) {
    $lin = $_POST["linhas"];
    $col = $_POST["colunas"];
    $i = 1;
    echo "<h2>Exercício 2</h2>";
    echo "<table border='1'>";
    while ($i <= $lin) {
        echo "<tr>";
        $j = 1;
        while ($j <= $col) {
            echo "<td>$i,$j</td>";
            $j++;
        }
        echo "</tr>";
        $i++;
    }
    echo "</table>";
}
?>