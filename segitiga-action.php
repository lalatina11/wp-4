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
            <table class="table table-bordered" style="width: 50%;margin: 12px auto;">
                <tr>
                    <th>Rumus</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <td>Luas = 1/2 x alas x tinggi</td>
                    <td><?php echo $luas; ?></td>
                </tr>
                <tr>
                    <td>Keliling = sisi a + sisi b + sisi c</td>
                    <td><?php echo $keliling; ?></td>
                </tr>
            </table>
        </section>
    </main>
</body>

</html>