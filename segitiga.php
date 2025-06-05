<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Segitiga</h1>
    <main>
        <section>
            <form action="segitiga-action.php"
                style="text-align: center;text-transform: capitalize;display: flex;justify-content: center;align-items: center;flex-direction: column;width: 50vh; margin: auto;gap: 20px;"
                method="POST">
                <h2>
                    hitung luas Segitiga</h2>
                <table style="width: 100%; text-align: left;">
                    <tr style="gap: 10px;">
                        <td><label for="alas">Alas</label></td>
                        <td>:</td>
                        <td><input type="number" name="alas" style="width: 100%;" id="alas"
                                placeholder="Masukkan alas Segitiga" required></td>
                    </tr>
                    <tr style="gap: 10px;">
                        <td><label for="tinggi">Tinggi</label></td>
                        <td>:</td>
                        <td><input type="number" name="tinggi" style="width: 100%;" id="tinggi"
                                placeholder="Masukkan tinggi Segitiga" required></td>
                    </tr>
                    <tr style="gap: 10px;">
                        <td><label for="sisi-a">Sisi a</label></td>
                        <td>:</td>
                        <td><input type="number" name="sisi-a" style="width: 100%;" id="sisi-a"
                                placeholder="Masukkan sisi a Segitiga" required></td>
                    </tr>
                    <tr style="gap: 10px;">
                        <td><label for="sisi-b">Sisi b</label></td>
                        <td>:</td>
                        <td><input type="number" name="sisi-b" style="width: 100%;" id="sisi-b"
                                placeholder="Masukkan sisi b Segitiga" required></td>
                    </tr>
                    <tr style="gap: 10px;">
                        <td><label for="sisi-c">Sisi c</label></td>
                        <td>:</td>
                        <td><input type="number" name="sisi-c" style="width: 100%;" id="sisi-c"
                                placeholder="Masukkan sisi c Segitiga" required></td>
                    </tr>
                    <?php include "components/option.php" ?>
                </table>
                <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="" required>
            </form>
        </section>
    </main>
</body>

</html>