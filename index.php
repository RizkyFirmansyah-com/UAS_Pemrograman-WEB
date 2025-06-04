<?php include "koneksi/db.php"; 
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: loginadmin.php");
    exit;
}
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <title>ESKOBAR ADMIN</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head> 
<body class="container mt-5"> 
  <h2>ESKOBAR MENU</h2> 
  <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Menu</a> 
  <a href="logout.php" class="btn btn-primary mb-3">logout</a> 
  <table class="table table-bordered"> 
    <thead class="table-dark"> 
      <tr><th>No</th><th>Nama Menu</th><th>Harga</th><th>Deskripsi</th><th>Aksi</th></tr> 
    </thead> 
    <tbody> 
      <?php 
      $no = 1; 
      $result = mysqli_query($conn, "SELECT * FROM menu"); 
      while ($row = mysqli_fetch_assoc($result)) { 
        echo "<tr> 
                <td>$no</td> 
                <td>{$row['nama_menu']}</td> 
                <td>{$row['harga']}</td> 
                <td>{$row['deskripsi']}</td> 
                <td> 
                  <a href='edit.php?id={$row['id']}' class='btn btnwarning btn-sm'>Edit</a> 
                  <a href='hapus.php?id={$row['id']}' class='btn btndanger btn-sm' onclick='return confirm(\"Hapus data ini?\")'>Hapus</a> 
                </td> 
              </tr>"; 
        $no++; 
      } 
      ?> 
    </tbody> 
  </table> 
</body> 
</html> 