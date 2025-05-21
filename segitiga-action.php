<?php
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
$a = $_POST['sisi-a'];
$b = $_POST['sisi-b'];
$c = $_POST['sisi-c'];
$luas = 1 / 2 * $alas * $tinggi;
$keliling = $a + $b + $c;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Segitiga</h1>
    <main>
        <section>
            <div style="width: 35%;position: relative; margin: auto;">
                <img src="./assets/images/gambar-segitiga.webp"
                    style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Segitiga">
            </div>
            <div>
                <h1 style="text-align: center;">Luas = 1/2 x alas x tinggi = <?php echo $luas; ?></h1>
                <h1 style="text-align: center;">Keliling = sisi a + sisi b + sisi c = <?php echo $keliling; ?></h1>
            </div>
        </section>
    </main>
</body>

</html>