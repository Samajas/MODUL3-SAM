<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost:3308";
$dbuser = "root";
$dbpass = "";
$dbname = "db_wad_modul3";
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$connect) {
    echo "Database Tidak Bisa Terkoneksi";
}   else {
    echo "Database Berhasil Terkoneksi";
}
// 
?>