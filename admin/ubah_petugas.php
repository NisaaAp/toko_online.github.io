<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Petugas</title>
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<?php 
    include "navbar.php";
    include "koneksi.php";
    $qry_get_petugas=mysqli_query($koneksi,"select * from petugas where 
    id_petugas = '".$_GET['id_petugas']."'");
    $data_petugas=mysqli_fetch_array($qry_get_petugas);
    ?>

    
<div class="p-5 mb-4 bg-white text-success">
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Petugas</h1>
            <div class="card-body">
        <form action="proses_ubah_petugas.php" method="post">
        <input type="hidden" name="id_petugas" value=  "<?=$data_petugas['id_petugas']?>">
    Nama Petugas :
        <input type="text" name="nama_petugas" value=   "<?=$data_petugas['nama_petugas']?>" class="form-control">
    Username : 
        <input type="text" name="username" value="<?=$data_petugas['username']?>" class="form-control">
    Password : 
        <input type="password" name="password" value="" class="form-control"><br>
    LEVEL : 
        <input type="text" name="level" value="<?=$data_petugas['level']?>" class="form-control">
        <button type="submit" class="btn btn-success">Ubah Petugas</button><br><br>
    </form>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
   
</body>
</html>