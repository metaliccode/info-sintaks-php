<?php
// // pecabangan / pengkodisian 
// // if else,
// // if else if else 
// // ternary
// // switch 
// $i = 00;
// if ($i < 20) {
//     echo "benar";
// } else if ($i == 20) {
//     echo "Bingo";
// } else {
//     echo "salah";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .warna {
            background-color: azure;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>
</body>

</html>