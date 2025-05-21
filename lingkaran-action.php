<?php
$phi = 3.14;
$r = $_POST['jari-jari'];
$d = $_POST['diameter'];
$luas = $phi * $r * $r;
$keliling = 2 * $phi * $r;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Lingkaran</h1>
    <main>
        <section>
            <div style="width: 35%;position: relative; margin: auto;">
                <img src="./assets/images/gambar-lingkaran.webp  "
                    style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Lingkaran">
            </div>
            <div>
                <h1 style="text-align: center;">Luas = phi x r x r = <?php echo $luas; ?></h1>
                <h1 style="text-align: center;">Keliling = 2 (a + b) = <?php echo $keliling; ?></h1>
            </div>
        </section>
    </main>
</body>

</html>