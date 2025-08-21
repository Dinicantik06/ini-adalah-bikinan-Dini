<?php 

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "suci_septian";

$koneksi = mysqli_connect( "localhost","root","","suci_septian");

if( !$koneksi) {
die("Gagal terhubung dengan database : " .mysqli_connect_error());
}

?>