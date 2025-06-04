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
            <table style="width: 100%;">
                <tr>
                    <td><label for="d1">d1</label></td>
                    <td>:</td>
                    <td><input type="number" name="d1" style="width: 100%;" id="d1"
                            placeholder="Masukkan d1 Layang-Layang"></td>
                </tr>
                <tr>
                    <td><label for="d2">d2</label></td>
                    <td>:</td>
                    <td><input type="number" name="d2" style="width: 100%;" id="d2"
                            placeholder="Masukkan d2 Layang-Layang"></td>
                </tr>
                <tr>
                    <td><label for="a">a</label></td>
                    <td>:</td>
                    <td><input type="number" name="a" style="width: 100%;" id="a"
                            placeholder="Masukkan a Layang-Layang"></td>
                </tr>
                <tr>
                    <td><label for="b">b</label></td>
                    <td>:</td>
                    <td><input type="number" name="b" style="width: 100%;" id="b"
                            placeholder="Masukkan b Layang-Layang"></td>
                </tr>
                <?php include "components/option.php" ?>
            </table>
            <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="">
        </form>
    </main>
</body>

</html>