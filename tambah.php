<?php include "koneksi/db.php"; ?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Tambah Menu ESKOBAR</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head> 
<body class="container mt-5"> 
    <h2>Tambah Menu</h2> 
    <form method="POST"> 
        <div class="mb-3"> 
            <label>Nama Menu</label> 
            <input type="text" name="nama_menu" class="form-control" required> 
        </div>
        <div class="mb-3"> 
            <label>Harga</label> 
            <input type="text" name="harga" class="form-control" required> 
        </div> 
        <div class="mb-3"> 
            <label>Deskripsi</label> 
            <input type="text" name="deskripsi" class="form-control" required> 
        </div> 
        <button type="submit" name="simpan" class="btn btnsuccess">Simpan</button> 
        <a href="index.php" class="btn btn-secondary">Kembali</a> 
    </form> 
    <?php 
    if (isset($_POST['simpan'])) { 
    $nama_menu = $_POST['nama_menu']; 
    $harga  = $_POST['harga']; 
    $deskripsi  = $_POST['deskripsi']; 
    mysqli_query($conn, "INSERT INTO menu (nama_menu, harga, deskripsi) VALUES 
    ('$nama_menu', '$harga', '$deskripsi')"); 
    echo "<div class='alert alert-success mt-3'>Data berhasil disimpan.</div>  
    <script> 
    alert('Data Berhasil Ditambah') window.location.href = 'index.php' 
    </script> "; 
    } 
    ?> 
</body> 
</html>