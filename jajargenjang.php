<?php
$alas = 6;
$tinggi = 3;
$sisi = 4;
$luas = $alas * $tinggi;
$keliling = 2 * ($alas + $sisi);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Jajar Genjang</h1>
    <main>
        <section>
            <div style="width: 35%;position: relative; margin: auto;">
                <img src="./assets/rumus-jajar-genjang-1_169.webp"
                    style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Jajar Genjang">
            </div>
            <div>
                <h1 style="text-align: center;">Luas = alas x tinggi = <?php echo $luas; ?></h1>
                <h1 style="text-align: center;">Keliling = 2(alas + sisi) = <?php echo $keliling; ?></h1>
            </div>
        </section>
    </main>
</body>

</html>