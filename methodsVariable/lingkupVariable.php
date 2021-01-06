<?php
$a = 10;
// macam2 var : 
// lokal, global, super global
// gunakan sintaks global untuk mangambil var dari luar fungsi
function tampil()
{
    global $a;
    echo $a;
}

// Variable Super global
// $_GET , $_POST , $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
// merupakan sebuah array assosiative
