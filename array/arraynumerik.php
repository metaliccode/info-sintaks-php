<!-- array numeric  -->
<?php
// array numerik 
$mahasiswa = ["Ihsan Miftahul Huda", "98798679", "Teknik Informatika", "isan@gmail.com"];
// array multidimensi
$mahasiswas = [
    ["Ihsan Miftahul Huda", "98798679", "Teknik Informatika", "isan@gmail.com"],
    ["Fhadli Zhilal", "9975574", "Teknik Informatika", "fhadli@gmail.com"]
];

//
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <!-- <ul>
        <li>Ihsan Miftahul Huda</li>
        <li>90798798675</li>
        <li>Teknik IOnformatika</li>
        <li>isan@gmail.com</li>
    </ul> -->
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><?= $mhs ?></li>
        </ul>
    <?php endforeach ?>

    <br>
    <ul><?= $mahasiswa[0] ?></ul>

    <?php foreach ($mahasiswas as $m) : ?>
        <ul>
            <li>Nama : <?= $m[0] ?></li>
            <li>NIP : <?= $m[1] ?></li>
            <li>Jurusan<?= $m[2] ?></li>
            <li>Email :<?= $m[3] ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>