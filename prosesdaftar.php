<?php
include 'koneksi.php';

// Ambil data dari form
$jeneng = $_POST['nama'];
$unm = $_POST['username'];
$wrd = $_POST['password'];

// Query untuk memasukkan data ke tabel users
$sql = "INSERT INTO tblogin (id, nama, username, password ) VALUES ('', '$jeneng' ,'$unm', '$wrd')";

// Eksekusi query dan cek berhasil atau tidak
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<p><a href="index.html">Kembali