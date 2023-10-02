<?php
function fecha_inglesa($fecha){
    $fechaPartida = explode('.',$fecha);
    return $fechaPartida[2] . '/' . $fechaPartida[1] . '/' . $fechaPartida[0];
}

function vell($atletas){
    $fechaAntigua = null;
    $llaveAntigua = null;

    foreach ($atletas as $llave => $fecha){
        $fechaInglesa = fecha_inglesa($fecha);
        $fechaConvertida = strtotime($fechaInglesa);
        if($fechaConvertida < $fechaAntigua || $fechaAntigua === null){
            $fechaAntigua = $fechaConvertida;
            $llaveAntigua = $llave;
        }
    }
    return $llaveAntigua;
}

function laureado($records) {
    $contador = array_count_values($records);
    arsort($contador);
    return array_key_first($contador);
}

function jove($nacimientos, $fechas) {
    $atletaMasJoven = null;
    $menorDiferencia = PHP_INT_MAX;

    foreach ($nacimientos as $indice => $natalici) {
        $diferencia = any($fechas[$indice]) - $natalici;

        if ($diferencia < $menorDiferencia) {
            $menorDiferencia = $diferencia;
            $atletaMasJoven = $indice;
        }
    }

    return [$atletaMasJoven, $menorDiferencia];
}

function any($fecha){
    $fechaPartida = explode('.',$fecha);
    return $fechaPartida[2];
}


function array_column_ext($array, $column_key, $preserve_keys = false) {
    $result = array();
    foreach ($array as $key => $subarray) {
        if (isset($subarray[$column_key])) {
            if ($preserve_keys) {
                $result[$key] = $subarray[$column_key];
            } else {
                $result[] = $subarray[$column_key];
            }
        }
    }
    return $result;
}


