<!DOCTYPE html>
<html lang="es">
<?php
$edat = $_GET["edat"];
const ANYS_JUBILACIO = 67;
$anyActual = date("Y");
$anyJubilacio = (ANYS_JUBILACIO - $edat) + $anyActual;
if(isset($edat)){
    echo "<p>" . $edat - 10 . "</p>";
    echo "<p>" .$edat + 10 . "</p>";
    echo $anyJubilacio;
}else{
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