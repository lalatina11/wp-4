<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Persegi Panjang</h1>
    <main>
        <section>
            <form action="persegipanjang-action.php"
                style="text-align: center;text-transform: capitalize;display: flex;justify-content: center;align-items: center;flex-direction: column;width: 50vh; margin: auto;gap: 20px;"
                method="POST">
                <h2>
                    hitung luas Persegi</h2>
                <table style="width: 100%;">
                    <tr>
                        <td><label for="panjang">Panjang</label></td>
                        <td>:</td>
                        <td><input type="number" name="panjang" style="width: 100%; padding: 4px 8px;" id=""
                                placeholder="Masukkan panjang Persegi-Panjang"></td>
                    </tr>
                    <tr>
                        <td><label for="lebar">Lebar</label></td>
                        <td>:</td>
                        <td><input type="number" name="lebar" style="width: 100%; padding: 4px 8px;" id=""
                                placeholder="Masukkan lebar Persegi-Panjang"></td>
                    </tr>
                    <?php include "components/option.php" ?>
                </table>
                <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="" />
            </form>
        </section>
    </main>
</body>

</html>