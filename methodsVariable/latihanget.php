<?php
// untuk megecek apakah tidak ada data di $_GET
if (!isset($_GET['nama']) || !isset($_GET['nip']) || !isset($_GET['email']) || !isset($_GET['gambar'])) {
    header("location: get.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan $GET</title>
</head>

<body>
    <ul>
        <li><img src="img" alt=""></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nip"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["gambar"]; ?></li>

    </ul>
    <a href="get.php">kembali ke halamanget</a>
</body>

</html>