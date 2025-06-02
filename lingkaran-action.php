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
                <a href="/" class="btn btn-secondary" style="width: 100%; margin: 20px 0px;">Home</a>
                <img src="./assets/images/gambar-lingkaran.webp  "
                    style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Lingkaran">
            </div>
            <table class="table table-bordered" style="width: 50%;margin: auto;">
                <tr>
                    <th>Rumus</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <td>Luas = phi x r x r</td>
                    <td><?php echo $luas; ?></td>
                </tr>
                <tr>
                    <td>Keliling = 2 x phi x r</td>
                    <td><?php echo $keliling; ?></td>
                </tr>
            </table>
        </section>
    </main>
</body>

</html>