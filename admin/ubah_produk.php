<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<?php 
    include "navbar.php";
    include "koneksi.php";
    $query_get_produk=mysqli_query($koneksi,"SELECT * FROM toko_produk where 
    id_produk = '".$_GET['id_produk']."'");
    $data_produk=mysqli_fetch_array($query_get_produk);
    ?>

    
<div class="p-5 mb-4 bg-white text-success">
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Produk</h1>
            <div class="card-body">
            <form action="proses_ubah_produk.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_produk" value="<?=$data_produk['id_produk']?>">

    Nama Produk :
        <input type="text" name="nama_produk" value="<?=$data_produk['nama_produk']?>" placeholder="Masukkan Nama Produk" class="form-control">
  
    Harga :
        <input type="number" name="harga" value="<?=$data_produk['harga']?>" placeholder="Masukkan Harga Produk" class="form-control"><br>
    Deskripsi :
        <textarea name="deskripsi" value="<?=$data_produk['deskripsi']?>" placeholder="Masukkan Deskripsi Produk" class="form-control"
            rows="4"></textarea><br>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <img src="foto/<?=$data_produk['foto_produk']?>" style="width: 120px;float: left;margin-bottom: 5px;">
        <input type="file" class="form-control" name="foto" required>
                    </div>
            <button type="submit" class="btn btn-success">Ubah Produk</button><br><br>
    </form>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
   
</body>
</html>

