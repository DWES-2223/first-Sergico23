<!DOCTYPE html>
<html lang="en">
<?php
include_once('functions.php');
include_once('245cap.html')
?>
<head>
    <meta charset="UTF-8">
    <title>Resultat formulari compra</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<ul>';
    $total = 0;
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'nom') !== false) {
            echo '<li>'.$value.' - Preu €: ';
        }
        if (strpos($key, 'preu') !== false && is_numeric($value)) {
            echo $value.' - Preu Pts.: '.euro2pesetes($value).'</li>';
            $total += $value;
        }
    }
    echo '<li>Total - Preu €: '.$total.' - Preu Pts.: '.euro2pesetes($total).'</li>';
    echo '</ul>';
}
?>
<?php include_once('245peu.html') ?>
</body>
</html>
