<?php
// membuat fungsi sendiri 
// ketika params ada maka akan diset secara default 
function salam($waktu = "Datang", $nama = "Admin")
{
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Fungsi</title>
</head>

<body>
    <!-- membuat argumen untuk params  -->
    <h1><?= salam("Siang", " Ihsan "); ?></h1>
</body>

</html>