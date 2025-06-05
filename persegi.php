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
                        <td><input type="number" required name="sisi" style="width: 100%;" id="sisi"
                                placeholder="Masukkan sisi Persegi"></td>
                    </tr>
                    <?php include "components/option.php" ?>
                </table>
                <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="" value="Submit">
            </form>
        </section>
    </main>
</body>

</html>