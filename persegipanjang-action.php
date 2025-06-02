<?php
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];
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
                <a href="/" class="btn btn-secondary" style="width: 100%; margin: 20px 0px;">Home</a>
                <img src="./assets/images/gambar-persegi-panjang.webp"
                    style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Persegi Panjang">
            </div>
            <table class="table table-bordered" style="width: 50%;margin: 12px auto;">
                <tr>
                    <th>Rumus</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <td>Luas = panjang x lebar</td>
                    <td><?= $panjang . " X " . $lebar . " =" . $luas; ?></td>
                </tr>
                <tr>
                    <td>Keliling = 2 x (panjang + lebar)</td>
                    <td><?= "2 x (" . $panjang . " + " . $lebar . ") = " . $keliling; ?></td>
                </tr>
            </table>
    </main>
</body>

</html>