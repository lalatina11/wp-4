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
                <input type="number" name="alas" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan alas Segitiga">
                <input type="number" name="tinggi" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan tinggi Segitiga">
                <input type="number" name="sisi-a" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan sisi a Segitiga">
                <input type="number" name="sisi-b" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan sisi b Segitiga">
                <input type="number" name="sisi-c" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan sisi c Segitiga">
                <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="">
            </form>
        </section>
    </main>
</body>

</html>