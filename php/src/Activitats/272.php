<?php
function vell($atletas) {
    $oldestDate = strtotime('9999-12-31');
    $oldestKey = null;

    foreach ($atletas as $atleta => $datos) {
        $fecha = strtotime(str_replace('.', '-', $datos['data']));

        if ($fecha < $oldestDate) {
            $oldestDate = $fecha;
            $oldestKey = $atleta;
        }
    }

    return $oldestKey;
}
