<?php
$a = 8;
$b = 12;
$t = 7;
$c = 10;
$d = 12;
$luas = 1 / 2 * ($a + $b) * $t;
$keliling = $a + $b + $c + $d;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <?php include "./components/back-button.php" ?>
    <h1 style="text-align: center;">Trapesium</h1>
    <main>
        <section>
            <form action="trapesium-action.php"
                style="text-align: center;text-transform: capitalize;display: flex;justify-content: center;align-items: center;flex-direction: column;width: 50vh; margin: auto;gap: 20px;"
                method="POST">
                <h2>
                    hitung luas Trapesium</h2>
                <input type="number" name="a" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan a Trapesium">
                <input type="number" name="b" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan b Trapesium">
                <input type="number" name="c" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan c Trapesium">
                <input type="number" name="d" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan d Trapesium">
                <input type="number" name="t" style="width: 100%; padding: 4px 8px;" id=""
                    placeholder="Masukkan t Trapesium">
                <input class="btn btn-primary" style="width: 100%;" type="submit" name="submit" id="">
            </form>
        </section>
    </main>
</body>

</html>