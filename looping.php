<?php
// Pnegulangan 
// for .. while
// foreach -> pengulangan khusus array 

// ->.. for
// for ( $i = 0; $i < 5; $i++){
//     echo "Hello World !!!";
// }

// .. -> while 
// $i = 0;
// while ($i < 5) {
//     echo "Helo World";
//     $i++;
// }

// do while -->
// $i = 10;
// do {
//     echo "Ihsan Miftahul";
// } while ($i < 5);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Peulangan</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding=>
        <!-- <td>123</td>
        <td>21</td>
        <td>213</td>
        <td>231</td>
        <td>21</td> -->
        <!-- contoh perulangan dengan for dengan htmlny dingabung dengan php-->
        <!-- <?php
                for ($i = 1; $i <= 3; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= 5; $j++) {
                        echo "<td>$i,$j</td>";
                    }
                    echo "<tr>";
                }
                ?> -->

        <!-- perulangan dengan dipisah antara html dan php  -->
        <?php for ($i = 1; $i <= 5; $i++) { ?>
        
        <tr>
            <?php for ($j = 1; $j <= 5; $j++) { ?>
                <td><?= "$i, $j"; ?></td>
        </tr>
    <?php } ?>
    <!-- biar gk bingung ganti kurawal "{}"
            dengan { -> : dan }-> endfor -->
    </table>
</body>

</html>