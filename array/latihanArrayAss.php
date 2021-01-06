<?php
// $mahasiswa = ["Ihsan Miftahul Huda", "8975765", "isan@gmail.com", "Teknik Informatika"];

// array assosiative 
// definisi sama seperti array numerik
// keynya adalah stirng yang kita buat sendiri

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

// echo $mahasiswa[1]["nilai"][1];
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

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"];  ?>">
            </li>
            <li>Nama : <?= $mhs["nama"] ?> </li>
            <li>NIP : <?= $mhs["nip"] ?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ?></li>
            <li>Email :<?= $mhs["email"] ?></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>