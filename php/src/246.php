<?php
$usuari = $_POST['usuari'];
$contrasenya = $_POST['contrasenya'];

include('246password.php');

if (array_key_exists($usuari, $usuaris)) {
    if ($usuaris[$usuari] === $contrasenya) {
        echo "L'usuari introduït és correcte";
    } else {
        echo "L'usuari és incorrecte. La contrasenya és incorrecta.";
    }
} else {
    echo "L'usuari és incorrecte. L'usuari no existeix.";
}
?>
