<?php
function convertirAMayusculas($cadena)
{
    return strtoupper($cadena);
}

$cadenaOriginal = "Hola bon dia hui es diumenge";
$cadenaEnMayusculas = convertirAMayusculas($cadenaOriginal);
echo "Cadena original: $cadenaOriginal <br>";
echo "Cadena en mayúsculas: $cadenaEnMayusculas";

