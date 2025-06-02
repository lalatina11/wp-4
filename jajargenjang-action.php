<?php
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
$sisi = $_POST['sisi'];
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
                <img src="./assets/images/rumus-jajar-genjang-1_169.webp"
                    style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Jajar Genjang">
            </div>
            <table class="table table-bordered" style="margin: auto; max-width: 50%;">
                <tr>
                    <th>Rumus</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <td>Luas = alas x tinggi</td>
                    <td><?php echo $luas; ?></td>
                </tr>
                <tr>
                    <td>Keliling = 2(alas + sisi)</td>
                    <td><?php echo $keliling; ?></td>
                </tr>
            </table>
        </section>
    </main>
</body>

</html>