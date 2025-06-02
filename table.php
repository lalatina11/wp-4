<?php
$nama = $_POST['nama'];
$tel = $_POST['tel'];
$alamat = $_POST['alamat'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <main>
        <table class="table table-bordered" border="1">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>Telpon</td>
                <td>:</td>
                <td><?= $tel ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $alamat ?></td>
            </tr>
        </table>
    </main>
</body>

</html>