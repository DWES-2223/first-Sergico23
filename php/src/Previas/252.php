<?php
function contarLetrasYPalabras($frase) {

    $palabras = explode(' ', $frase);
    $totalLetras = 0;
    $totalPalabras = count($palabras);
    $longitudPalabras = [];

    foreach ($palabras as $palabra) {
        $totalLetras += strlen($palabra);
        $longitudPalabras[] = "$palabra: " . strlen($palabra) . " caràcters";
    }

    return ['Lletres totals' => $totalLetras, 'Quantitat de paraules' => $totalPalabras, 'Longitud de paraules' => $longitudPalabras];
}


$frase = "Hola bon dia hui es diumenge";
$resultado = contarLetrasYPalabras($frase);

echo "Lletres totals: " . $resultado['Lletres totals'] . "<br>";
echo "Quantitat de paraules: " . $resultado['Quantitat de paraules'] . "<br>";

foreach ($resultado['Longitud de paraules'] as $linea) {
    echo $linea . "<br>";
}
?>