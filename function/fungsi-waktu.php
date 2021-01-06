<?php
// hari 
echo date("l", time() - 60 * 60 * 24 * 100);
// tanggal
echo " " . date("d");
// bulan 
echo " " . date("M");
// tahun 
echo " " . date("Y");

echo date("l, d-M-Y ");

// ketika menggunakan tanggal harus liat dahulu pakah ada kelas yng perlu dipanggil dulu

// menampilkan waktu dalam detik
// UNIX TimeStamp / EPOCH time (Waktu pertama komputer)
// detik yang sudah berlalu sejak 1 Januari 1978
// membandingkan waktu saat ini sampai waktu yg ditentukan
echo time();
// cek tanggal lahir saya dgn mktime
// mktime(0,0,0,0,0,0)  -> membuat sendiri detik
// jam, menit , detik , bulan, tanggal , tahun 
echo "  " . date("l", mktime(0, 0, 0, 4, 17, 1996));

// Kebalikan dari mktime --> menggunakan string
echo date("l", strtotime("17 april 1996"));
