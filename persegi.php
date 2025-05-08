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
                <input type="number" name="sisi" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan sisi Persegi">
                <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="">
            </form>
        </section>
    </main>
</body>

</html>