<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Jajar Genjang</h1>
    <main>
        <section>
            <form action="jajargenjang-action.php"
                style="text-align: center;text-transform: capitalize;display: flex;justify-content: center;align-items: center;flex-direction: column;width: 50vh; margin: auto;gap: 20px;"
                method="POST">
                <h2>
                    hitung luas Jajar Genjang</h2>
                <table style="width: 100%;text-align: left;">
                    <tr>
                        <td><label for="alas">alas</label></td>
                        <td>:</td>
                        <td><input type="number" name="alas" style="width: 100%;" id="alas"
                                placeholder="Masukkan alas Jajar Genjang"></td>
                    </tr>
                    <tr>
                        <td><label for="sisi">sisi</label></td>
                        <td>:</td>
                        <td><input type="number" name="sisi" style="width: 100%;" id="sisi"
                                placeholder="Masukkan sisi Jajar Genjang"></td>
                    </tr>
                    <tr>
                        <td><label for="tinggi">tinggi</label></td>
                        <td>:</td>
                        <td><input type="number" name="tinggi" style="width: 100%;" id="tinggi"
                                placeholder="Masukkan tinggi Jajar Genjang"></td>
                    </tr>
                </table>
                <td colspan="3"><input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id=""
                        value="Submit"></td>
        </section>
    </main>
</body>

</html>