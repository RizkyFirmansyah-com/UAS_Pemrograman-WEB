<?php include "koneksi/db.php"; ?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <title>ESKOBAR</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head> 
<body class="container mt-5"> 
  <h2>ESKOBAR MENU</h2> 
  <table class="table table-bordered"> 
    <thead class="table-dark"> 
      <tr><th>No</th><th>Nama Menu</th><th>Harga</th><th>Deskripsi</th></tr> 
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
              </tr>"; 
        $no++; 
      } 
      ?> 
    </tbody> 
  </table> 
</body> 
</html> 