<?php
// array 
// variable yang dapat memiliki banyak nilai
// cara membuat array
// Elemen pada array boleh memiliki type data ygn berbeda
// tanda => merupakan "adalah"
// deefinisi lain dari array adalah psangan anatara key dan value
// keynya adalah index , yang dimulai dari 0




//  Cara lama ->
$hari = array("Senin", "Selasa", "Rabu");
// Cara Baru ->
$bulan = ["Januari", "Februari", "Maret"];
$arr = [123, "ihsan"];


// Menampilkan Array
// var_dump($hari);
// // echo "<br>";
// // print_r($bulan);
// // echo "<br>";

// // // menampilkan stu elemen array pada php 
// // echo $hari[0] . ",";
// // echo $hari[2] . ",";

// // menambah elemen baru pada array 
// $hari[] = "Kamis";
// $hari[] = "Jumat";
// echo "<br>";
// var_dump($hari);

// melakukan pengulangan pada array
// for atau forech 
$angka = [2, 3, 23, 2, 42,];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: darksalmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
    <title>Document</title>
</head>
<br><br><br><br>
<!-- pengulangan dengan for  -->
<?php for ($i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak">
        <?php echo $angka[$i]; ?>
    </div>
<?php } ?>

<div class="clear"></div>

<!-- pengulangan dengan forech  -->
<?php foreach ($angka as $a) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>
<!-- dengan pengulangan di tulis templating  -->
<?php foreach ($angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

<body>
</body>

</html>