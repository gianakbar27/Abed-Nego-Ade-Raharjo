<?php
$_server = "localhost";
$user = "root";
$password = "";
$database = "TUGAS RPL";
$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("koneksi database Gagal: ". mysqli_connect_error());
}
?>