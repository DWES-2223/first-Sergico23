<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
</head>
<body>
<h2>Resultados:</h2>

<?php
function filtrarNumerosPares($numeros) {
    $numeros = explode(' ', $numeros);
    $numerosPares = [];

    foreach ($numeros as $numero) {
        if (is_numeric($numero) && $numero % 2 == 0) {
            $numerosPares[] = $numero;
        }
    }

    return $numerosPares;
}

if (isset($_POST['numeros'])) {
    $entrada = trim($_POST['numeros']);
    $numerosPares = filtrarNumerosPares($entrada);

    if (empty($numerosPares)) {
        echo "No hi ha números parells.";
    } else {
        $cantidad = count($numerosPares);
        echo "Els $cantidad nombres parells són: " . implode(' ', $numerosPares);
    }
}
?>

<p><a href="256.html">Tornar enrere</a></p>
</body>
</html>