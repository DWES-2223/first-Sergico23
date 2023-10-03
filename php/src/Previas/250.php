<?php
function caractersImparells($frase) {
    $novaFrase = "";
    $longitud = strlen($frase);

    for ($i = 0; $i < $longitud; $i++) {
        if ($i % 2 == 0) {
            $novaFrase .= $frase[$i];
        }
    }

    return $novaFrase;
}

$fraseOriginal = "pissarra";
$fraseImparelles = caractersImparells($fraseOriginal);
echo "Frase original: $fraseOriginal <br>";
echo "Frase amb caràcters imparells: $fraseImparelles";
?>