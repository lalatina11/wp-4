<?php
$d1 = 24;
$d2 = 48;
$a = 5;
$b = 37;
$luas = 1 / 2 * $d1 * $d2;
$keliling = 2 * ($a + $b);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang Layang</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Layang Layang</h1>
    <main>
        <section>
            <div style="width: 35%;position: relative; margin: auto;">
                <img src="./assets/images/layang.webp" style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;"
                    alt="Layang Layang">
            </div>
            <div>
                <h1 style="text-align: center;">Luas = 1/2 d1 x d2 = <?php echo $luas; ?></h1>
                <h1 style="text-align: center;">Keliling = 2 (a + b) = <?php echo $keliling; ?></h1>
            </div>
        </section>
    </main>
</body>

</html>