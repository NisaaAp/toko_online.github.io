<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<?php
    
    include "koneksi.php";
    ?><br><br>

<div class="p-5 mb-4 bg-white text-success">
    <div class="container"><br>
    <div class="card">
            <h1 class="card-header">Tambah Petugas</h1>
            <div class="card-body">

    <h2 class="text-center">Tambah Petugas</h2><br>
    <form action="proses_tambah_petugas.php" method="post"><br>
     Nama Petugas :
        <input type="text" name="nama_petugas" value="" placeholder=" Masukkan Nama Petugas" class="form-
            control"><br><br>
    Username :
        <input type="text" name="username" placeholder=" Masukkan Username" value="" class="form-
            control"><br><br>
    Password :
       <input type="password" name="password" value="" placeholder=" Masukkan Password" class="form-
            control"><br><br>
    LEVEL :
    <input type="text" name="level" value="" placeholder=" Masukkan Level Anda" class="form-
            control"><br><br>
         
            <button type="submit" class="btn btn-success">Tambah Petugas</button><br><br>
    </form>
    </div>
    </div>
    </div>
</div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   
</body>
</html>