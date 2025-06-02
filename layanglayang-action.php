<?php
$d1 = $_POST['d1'];
$d2 = $_POST['d2'];
$a = $_POST['a'];
$b = $_POST['b'];
$luas = 1 / 2 * $d1 * $d2;
$keliling = 2 * ($a + $b);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang Layang</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Layang Layang</h1>
    <main>
        <section>
            <div style="width: 35%;position: relative; margin: auto;">
                <a href="/" class="btn btn-secondary" style="width: 100%; margin: 20px 0px;">Home</a>
                <img src="./assets/images/layang.webp"
                    style="width: 100%;height: auto;margin-top: 20px;margin-bottom: 20px;" alt="Layang Layang">
            </div>
            <table class="table table-bordered" style="width: 50%;margin: auto;">
                <tr>
                    <th>Rumus</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <td>Luas = 1/2 x d1 x d2</td>
                    <td><?php echo $luas; ?></td>
                </tr>
                <tr>
                    <td>Keliling = 2 x (a + b)</td>
                    <td><?php echo $keliling; ?></td>
                </tr>
            </table>
        </section>
    </main>
</body>

</html>