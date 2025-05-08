<?php
$sisi = $_POST['sisi'];


$luas = $sisi * $sisi;
$keliling = 4 * $sisi;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Persegi</h1>
    <main>
        <section>
            <div style="width: 35%;position: relative; margin: auto;">
                <a href="/" class="btn btn-secondary" style="width: 100%; margin: 20px 0px;">Home</a>
                <img src="./assets/images/gambar-persegi.webp  " style="width: 100%;height: auto;" alt="Persegi">
            </div>
            <div
                style="margin-top: 20px; display: flex; justify-content: center;align-items: center;flex-direction: column;gap: 20px;">
                <h1 style="text-align: center;">Luas = sisi x sisi = <?php echo $luas; ?></h1>
                <h1 style="text-align: center;">Keliling = 4 x sisi = <?php echo $keliling; ?></h1>
            </div>
        </section>
    </main>
</body>

</html>