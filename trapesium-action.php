<?php
$a = $_POST['a'];
$b = $_POST['b'];
$t = $_POST['t'];
$c = $_POST['c'];
$d = $_POST['d'];
$luas = 1 / 2 * ($a + $b) * $t;
$keliling = $a + $b + $c + $d;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Trapesium</h1>
    <main>
        <section>
            <div style="width: 35%;position: relative; margin: auto;">
                <img src="./assets/images/gambar-trapesium.webp"
                    style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Trapesium">
            </div>
            <table class="table table-bordered" style="width: 50%;margin: 12px auto;">
                <tr>
                    <th>Rumus</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <td>Luas = 1/2 (a+b)xt</td>
                    <td><?php echo $luas; ?></td>
                </tr>
                <tr>
                    <td>Keliling = a+b+c+d</td>
                    <td><?php echo $keliling; ?></td>
                </tr>
            </table>
        </section>
    </main>
</body>

</html>