<?php
$d1 = 18;
$d2 = 24;
$sisi = 15;
$luas = 1 / 2 * $d1 * $d2;
$keliling = 4 * $sisi;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Belah Ketupat</h1>
    <main>
        <section>
            <div style="width: 35%;position: relative; margin: auto;">
                <img src="./assets/belah-ketupat_43.webp" style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Belah Ketupat">
            </div>
            <div>
                <h1 style="text-align: center;">Luas = 1/2 d1 x d2 = <?php echo $luas; ?></h1>
                <h1 style="text-align: center;">Keliling = 4 x sisi = <?php echo $keliling; ?></h1>
            </div>
        </section>
    </main>
</body>

</html>