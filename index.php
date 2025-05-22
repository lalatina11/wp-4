<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP 6</title>
    <?php include "./components/links-script.php" ?>
</head>

<body>
    <main>
        <h3 style="display: flex;justify-content: center;align-items: center;margin:20px 0px ;">Masukkan identitas anda
        </h3>
        <form
            style="display: flex;flex-direction: column;max-width: 450px;margin: auto; justify-content: center;align-items: center;gap: 16px;"
            action="">
            <div style="display: flex;flex-direction: column;gap: 8px;">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" />
            </div>
            <div style="display: flex;flex-direction: column;gap: 8px;">
                <label for="tel">No Telepon</label>
                <input type="tel" name="tel" id="tel" />
            </div>
            <div style="display: flex;flex-direction: column;gap: 8px;">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat"></textarea>
            </div>
            <div style="display: flex; gap: 8px;">
                <input style="flex: 1/2;" class="btn btn-secondary btn-wide" type="reset" name="" id="">
                <button style="flex: 1/2;" class="btn btn-secondary btn-wide">Submit</button>
            </div>
        </form>
    </main>
</body>

</html>