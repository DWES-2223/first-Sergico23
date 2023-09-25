<!DOCTYPE html>
<html lang="es">

<?php
if (isset($_GET['numero'])) {

    $numero = intval($_GET['numero']); 

    if ($numero > 0) {
        echo "El número $numero és positiu";
    } elseif ($numero < 0) {
        echo "El número $numero és negatiu";
    } else {
        echo "El número $numero és zero";
    }

} else {
    echo "Posa el numero a comprobar a la variable numero del QueryString";
}

?>

<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
</body>
</html>