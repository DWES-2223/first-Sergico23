<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>220</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        $suma = 0;
        for($i = 1; $i < 11; $i++){
         $suma += $i;
         echo $i;
         echo ($i == 10)?'=':'+';
        }
        echo $suma;
    ?>
</body>
</html>