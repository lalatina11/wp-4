<?php
$d1 = 18;
$d2 = 24;
$sisi = 15;
$luas = 1 / 2 * $d1 * $d2;
$keliling = 4 * $sisi;
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
            <form action="belahketupat-action.php"
                style="text-align: center;text-transform: capitalize;display: flex;justify-content: center;align-items: center;flex-direction: column;width: 50vh; margin: auto;gap: 20px;"
                method="POST">
                <h2>
                    hitung luas Belah Ketupat</h2>
                <input type="number" name="d1" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan d1 Belah Ketupat">
                <input type="number" name="d2" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan d2 Belah Ketupat">
                <input type="number" name="sisi" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan sisi Belah Ketupat">
                <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="">
            </form>

        </section>
    </main>
</body>

</html>