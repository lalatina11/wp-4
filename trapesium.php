<?php
$a = 8;
$b = 12;
$t = 7;
$c = 10;
$d = 12;
$luas = 1 / 2 * ($a + $b) * $t;
$keliling = $a + $b + $c + $d;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Trapesium</h1>
    <main>
        <section>
            <div style="width: 35%;position: relative; margin: auto;">
                <img src="./assets/gambar-trapesium.webp"
                    style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Trapesium">
            </div>
            <div>
                <h1 style="text-align: center;">Luas = 1/2 (a+b)xt = <?php echo $luas; ?></h1>
                <h1 style="text-align: center;">Keliling = a+b+c+d = <?php echo $keliling; ?></h1>
            </div>
        </section>
    </main>
</body>

</html>