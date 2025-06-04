<?php 
include "koneksi/db.php";
$id = $_GET['id']; 
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM menu WHERE id=$id")); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Edit Menu Eskobar</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head> 
<body class="container mt-5"> 
    <h2>Edit Menu</h2> 
    <form method="POST"> 
        <div class="mb-3"> 
            <label>Nama Menu</label> 
            <input type="text" name="nama_menu" class="form-control" value="<?= $data['nama_menu'] ?>" required> 
        </div> 
        <div class="mb-3"> 
            <label>Harga</label> 
            <input type="text" name="harga" class="form-control" value="<?= $data['harga'] ?>" required> 
        </div> 
        <div class="mb-3"> 
            <label>Deskripsi</label> 
            <input type="text" name="deskripsi" class="form-control" value="<?= $data['deskripsi'] ?>" required> 
        </div> 
        <button type="submit" name="update" class="btn btnwarning">Update</button> 
        <a href="index.php" class="btn btn-secondary">Kembali</a> 
    </form> 
    <?php 
    if (isset($_POST['update'])) { 
    $nama_menu = $_POST['nama_menu']; 
    $harga  = $_POST['harga']; 
    $deskripsi  = $_POST['deskripsi'];
    mysqli_query($conn, "UPDATE menu SET nama_menu='$nama_menu', harga='$harga', deskripsi='$deskripsi' WHERE id=$id"); 
    echo "<div class='alert alert-success mt-3'>Data berhasil diupdate.</div>"; 
    } 
    ?> 
</body> 
</html>