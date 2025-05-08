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
                <input type="number" name="panjang" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan panjang Persegi-Panjang">
                <input type="number" name="lebar" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan lebar Persegi-Panjang">
                <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="">
            </form>
        </section>
    </main>
</body>

</html>