<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "weblogin";

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}



?>
