<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_akademik";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if(!$koneksi){
    echo "Gagal connect: " . die(mysqli_error($koneksi));
}
?>