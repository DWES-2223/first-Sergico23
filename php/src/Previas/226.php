<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar tabla con filas y columnas</title>
</head>
<body>
<?php
if (isset($_POST['files']) && isset($_POST['columnes'])) {
    $files = (int)$_POST['files'];
    $columnes = (int)$_POST['columnes'];

    if (is_numeric($files) && is_numeric($columnes) && $files > 0 && $columnes > 0) {
        echo '<table>';
        echo '<thead><tr>';
        
        for ($i = 1; $i <= $columnes; $i++) {
            echo '<th>' . $i . '</th>';
        }
        
        echo '</tr></thead>';
        echo '<tbody>';
        
        for ($i = 1; $i <= $files; $i++) {
            echo '<tr>';
            
            for ($j = 1; $j <= $columnes; $j++) {
                if ($j === 1 || $i === 1) {
                    echo '<td>' . $i . $j . '</td>';
                } else {
                    echo '<td></td>';
                }
            }
            
            echo '</tr>';
        }
        
        echo '</tbody></table>';
    } else {
        echo 'Introduce valores numéricos positivos.';
    }
} else {
    echo 'Completa el formulari.';
}
?>
</body>
</html>
