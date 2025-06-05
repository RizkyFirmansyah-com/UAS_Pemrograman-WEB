<?php 
include "koneksi/db.php"; 
$id = $_GET['id']; 
mysqli_query($conn, "DELETE FROM menu WHERE id=$id"); 
header("Location: index.php"); 
?> 