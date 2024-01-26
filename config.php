<?php
//variabel inisialisasi
$servername="localhost";
$username ="root";
$password ="";
$database="dbperpus";


$koneksi = mysqli_connect($servername, $username, $password, $database);

if(!$koneksi){
    die("KONEKSI GAGAL: " .mysqli_connect_error());
}
?>