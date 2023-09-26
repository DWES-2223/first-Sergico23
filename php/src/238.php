<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matriu aleatoris</title>
</head>
<body>
<?php
$maxim = 0;
$minim = 999;
$array = [];
$columna = 0;
$fila = 0;

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 9; $j++) {
        do {
            $aleatori = rand(100, 999);
        } while (in_array($aleatori, $array));
        $array[$i][$j] = $aleatori;

        if ($aleatori > $maxim) {
            $maxim = $aleatori;
            $columna = $j;
        }
        if ($aleatori < $minim) {
            $minim = $aleatori;
            $fila = $i;
        }
    }
}

echo "<table><tbody>";
foreach ($array as $fil => $vector) {
    echo "<tr" . ($fila == $fil ? " style='background-color: green'" : "") . ">";
    foreach ($vector as $col => $valor) {
        echo "<td" . ($columna == $col ? " style='background-color: blue'" : "") . ">$valor</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";
?>
</body>
</html>
