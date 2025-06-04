<?php
$d1 = $_POST['d1'];
$d2 = $_POST['d2'];
$sisi = $_POST['sisi'];
$luas = 1 / 2 * $d1 * $d2;
$keliling = 4 * $sisi;
$pilih = $_POST['pilih'];
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
                <a href="/" class="btn btn-secondary" style="width: 100%; margin: 20px 0px;">Home</a>
                <img src="./assets/images/belah-ketupat_43.webp"
                    style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Belah Ketupat">
            </div>
            <table class="table table-bordered" style="margin: auto; max-width: 50%;">
                <tr>
                    <th>Rumus</th>
                    <th>Hasil</th>
                </tr>
                <?php if ($pilih === "luas") { ?>
                    <tr>
                        <td>Luas = 1/2 x d1 x d2</td>
                        <td><?php echo $luas; ?></td>
                    </tr>
                <?php } else if ($pilih === "keliling") { ?>
                        <tr>
                            <td>Keliling = 4 x sisi</td>
                            <td><?php echo $keliling; ?></td>
                        </tr>
                <?php } else { ?>
                        <tr>
                            <td>Luas = 1/2 x d1 x d2</td>
                            <td><?php echo $luas; ?></td>
                        </tr>
                        <tr>
                            <td>Keliling = 4 x sisi</td>
                            <td><?php echo $keliling; ?></td>
                        </tr>
                <?php } ?>
            </table>
        </section>
    </main>
</body>

</html>