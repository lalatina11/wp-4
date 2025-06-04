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

                <table style="width: 100%;text-align: left;">
                    <tr>
                        <td><label for="d1">d1</label></td>
                        <td>:</td>
                        <td><input type="number" name="d1" style="width: 100%;" id="d1"
                                placeholder="Masukkan d1 Belah Ketupat"></td>
                    </tr>
                    <tr>
                        <td><label for="d2">d2</label></td>
                        <td>:</td>
                        <td><input type="number" name="d2" style="width: 100%;" id="d2"
                                placeholder="Masukkan d2 Belah Ketupat"></td>
                    </tr>
                    <tr>
                        <td><label for="sisi">sisi</label></td>
                        <td>:</td>
                        <td><input type="number" name="sisi" style="width: 100%;" id="sisi"
                                placeholder="Masukkan sisi Belah Ketupat"></td>
                    </tr>
                    <tr>
                        <td><label for="pilih">Pilih</label></td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="pilih" id="pilih" value="luas">
                            <label for="">Luas</label>
                            <input type="radio" name="pilih" id="pilih" value="keliling">
                            <label for="">Keliling</label>
                            <input type="radio" name="pilih" id="pilih" value="semua">
                            <label for="">Semua</label>
                        </td>
                    </tr>
                </table>
                <td colspan="3"><input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id=""
                        value="Submit"></td>
            </form>

        </section>
    </main>
</body>

</html>