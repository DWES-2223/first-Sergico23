<!DOCTYPE html>
<html lang="es">

<?php
if (isset($_GET['edat'])) {
    
    $edat = intval($_GET['edat']);

    if ($edat < 3) {
        echo "ets un bebé";
    } elseif ($edat >= 3 && $edat <= 12) {
        echo "ets un xiquet";
    } elseif ($edat >= 13 && $edat <= 17) {
        echo "ets un adolescent";
    } elseif ($edat >= 18 && $edat <= 66) {
        echo "ets un adult";
    } else {
        echo "ets un jubilat";
    }

} else {
    echo "Posa la teu edat actual a la variable edat pel QueryString";
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