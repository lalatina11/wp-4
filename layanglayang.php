<?php


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
        <form action="layanglayang-action.php"
            style="text-align: center;text-transform: capitalize;display: flex;justify-content: center;align-items: center;flex-direction: column;width: 50vh; margin: auto;gap: 20px;"
            method="POST">
            <h2>
                hitung luas Layang-Layang</h2>
            <input type="number" name="d1" style="width: 100%; padding: 4px 8px;" id=""
                placeholder="Masukkan d1 Layang-Layang">
            <input type="number" name="d2" style="width: 100%; padding: 4px 8px;" id=""
                placeholder="Masukkan d2 Layang-Layang">
            <input type="number" name="a" style="width: 100%; padding: 4px 8px;" id=""
                placeholder="Masukkan a Layang-Layang">
            <input type="number" name="b" style="width: 100%; padding: 4px 8px;" id=""
                placeholder="Masukkan b Layang-Layang">
            <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="">
        </form>
    </main>
</body>

</html>