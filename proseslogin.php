<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tblogin WHERE username = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($user = mysqli_fetch_assoc($result)) {
   if ($password === $user['password']) {
    
        $_SESSION['username'] = $username;
        header("Location: loginsukses.html");
        exit();
    } else {
        echo "Password salah!";
    }
} else {
    echo "Login gagal";
}
?>
