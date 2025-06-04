<?php
session_start();
include 'koneksi/db.php';
$username = trim(mysqli_real_escape_string($conn, $_POST['username']));
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query error: " . mysqli_error($conn));
}
$user = mysqli_fetch_assoc($result);

if ($user) {
    if (password_verify($password, $user['password'])) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $user['username'];
        header("Location: index.php");
        exit;
    } else {
        echo '<div class="alert alert-danger" role="alert">Password salah!</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Username tidak ditemukan!</div>';
}
?>
