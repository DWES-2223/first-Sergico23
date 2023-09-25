<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>220</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        extract($_GET);
      if(isset($base) && isset($exponent)){
        $potencia = 1;
        for($i = 0; $i < $exponent; $i++){
            $potencia *= $base;
        }
        echo $base.'^'.$exponent.' = '.$potencia;
      }else{
        echo "Posa la base i l'exponent a les variables base i exponent pel QueryString";
      }
    ?>
</body>
</html>