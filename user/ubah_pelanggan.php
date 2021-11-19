<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Pelanggan</title>
r
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<?php 
    include "navbar.php";
    include "koneksi.php";
    $qry_get_pelanggan=mysqli_query($koneksi,"select * from pelanggan where 
    id_pelanggan = '".$_GET['id_pelanggan']."'");
    $data_pelanggan=mysqli_fetch_array($qry_get_pelanggan);
    ?>

    
<div class="p-5 mb-4 bg-white text-success">
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Pelanggan</h1>
            <div class="card-body">
        <form action="proses_ubah_pelanggan.php" method="post">
        <input type="hidden" name="id_pelanggan" value=  "<?=$data_pelanggan['id_pelanggan']?>">
    Nama Pelanggan :
        <input type="text" name="nama_pelanggan" value=   "<?=$data_pelanggan['nama_pelanggan']?>" class="form-control">
    Alamat :
        <input type="text" name="alamat" value="<?=$data_pelanggan['alamat']?>" class="form-control">
    No. Telepon : 
    <input type="number" name="telp" value="<?=$data_pelanggan['telp']?>" class="form-control">
    Username : 
        <input type="text" name="username" value="<?=$data_pelanggan['username']?>" class="form-control">
    Password : 
        <input type="password" name="password" value="" class="form-control"><br>

        <button type="submit" class="btn btn-success">Ubah Pelanggan</button><br><br>
    </form>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
   
</body>
</html>