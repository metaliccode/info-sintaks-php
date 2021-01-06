<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan $_POST</title>
</head>

<body>
    <?php if (isset($_POST["submit"])) { ?>

        <h1>Selamat Datang, <?= $_POST['nama']; ?></h1>

    <?php } ?>
    <!-- <h1>Selamat Datang, <?= $_POST['nama']; ?></h1> -->

    <form action="" method="POST">
        <label for="nama">Masukan Nama</label>
        <input type="text" name="nama" id="nama">
        <button type="submit" name="submit">ya</button>
    </form>
</body>

</html>