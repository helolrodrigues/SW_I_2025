<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
<?php
echo "<h2>Exercício 1</h2>";
echo "<table border='1'>";
for ($i = 1; $i <= 8; $i++) {
    if ($i % 2 == 0) {
        echo "<tr bgcolor='lightgray'>";
    } else {
        echo "<tr>";
    }
    for ($j = 1; $j <= 4; $j++) {
        echo "<td>$i,$j</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>