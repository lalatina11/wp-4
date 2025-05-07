<?php
$panjang = 19;
$lebar = 10;
$luas = $panjang * $lebar;
$keliling = 2 * ($panjang + $lebar);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Persegi Panjang</h1>
    <main>
        <section>
            <div style="width: 35%;position: relative; margin: auto;">
                <img src="./assets/gambar-persegi-panjang.webp"
                    style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Persegi Panjang">
            </div>
            <div>
                <h1 style="text-align: center;">Luas = lebar x lebar = <?php echo $luas; ?></h1>
                <h1 style="text-align: center;">Keliling = 2 x (panjang x lebar) = <?php echo $keliling; ?></h1>
            </div>
        </section>
    </main>
</body>

</html>