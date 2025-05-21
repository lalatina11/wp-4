<?php

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
        <form action="lingkaran-action.php"
            style="text-align: center;text-transform: capitalize;display: flex;justify-content: center;align-items: center;flex-direction: column;width: 50vh; margin: auto;gap: 20px;"
            method="POST">
            <h2>
                hitung luas Lingkaran</h2>
            <input type="number" name="jari-jari" style="width: 100%; padding: 4px 8px;" id=""
                placeholder="Masukkan jari-jari Lingkaran">
            <input type="number" name="diameter" style="width: 100%; padding: 4px 8px;" id=""
                placeholder="Masukkan diameter Lingkaran">
            <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="">
        </form>
    </main>
</body>

</html>