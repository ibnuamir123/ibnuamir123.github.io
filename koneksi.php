<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "benresto";

$koneksi = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){ //cek koneksi
	die("tidak bisa terkoneksi ke database");

}
?>s