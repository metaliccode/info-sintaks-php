<?php
// // penggunaan metode get
// // super global 
// // merupakan array assosiative

// // $_GET

// $_GET["nama"] = "Ihsan Miftahul Huda";

// var_dump($_GET["nama"]);

$mahasiswa = [
    [
        "nama" => "Ihsan Miftahul Huda",
        "nip" => "946278346872",
        "email" => "isan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "tiwi.png"
    ],
    [
        "nama" => "Yova Oktafiari Arifin",
        "nip" => "45782",
        "email" => "Yova@gmail.com",
        "jurusan" => "Hukum Syariah",
        "nilai" => [89, 90, 23],
        "gambar" => "yop.png"

    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>

        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihanget.php?nama=<?= $mhs["nama"]; ?>&gambar=<?= $mhs["gambar"]; ?>&nip=<?= $mhs["nip"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["email"]; ?>">
                    <?= $mhs["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>

    </ul>

</body>

</html>