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

// Query untuk ambil data
$sql = "SELECT * FROM tblogin";
$result = mysqli_query($conn, $sql);

// Tampilkan dalam tabel
echo "<h2>Daftar Pendaftar</h2>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
        </tr>";

if (mysqli_num_rows($result) > 0) {
    // Loop data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $row['username'] . "</td>
                <td>" . $row['password'] . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
}

echo "</table>";

mysqli_close($conn);
?>
