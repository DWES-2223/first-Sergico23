<!DOCTYPE html>
<html lang="en">
<?php
extract($_GET);
?>
<head>
    <meta charset="UTF-8">
    <title>Mostar formulari amb quantiat caixes</title>
</head>
<body>
<?php
    if ($quantitat > 0) { ?>
        <form method="post" action="224.php">
            <?php for ($i = 0; $i < $quantitat; $i++) { ?>
                <div class="form-group">
                    <label for="quantitat<?= $i ?>">Nom</label>
                    <input id="quantitat<?= $i ?>" name="quantitat<?= $i ?>" placeholder="Escriu un nombre" type="text" required="required">
                </div>
            <?php } ?>
            <div class="form-group">
                <button name="submit" type="submit">Submit</button>
            </div>
        </form>
    <?php } else {
        $suma = 0;
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'quantitat') === 0 && is_numeric($value)) {
                $suma += intval($value);
            }
        }
        echo '<p>'.$suma.'</p>';
    }
    ?>
</body>
</html>
