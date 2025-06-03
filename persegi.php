<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <main>
        <section>
            <form action="persegi-action.php"
                style="text-align: center;text-transform: capitalize;display: flex;justify-content: center;align-items: center;flex-direction: column;width: 50vh; margin: auto;gap: 20px;"
                method="POST">
                <h2>
                    hitung luas Persegi</h2>
                <table style="width: 100%;">
                    <tr>
                        <td><label for="sisi">Sisi</label></td>
                        <td>:</td>
                        <td><input type="number" name="sisi" style="width: 100%;" id="sisi"
                                placeholder="Masukkan sisi Persegi"></td>
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
                <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="" value="Submit">
            </form>
        </section>
    </main>
</body>

</html>