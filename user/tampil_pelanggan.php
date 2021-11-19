<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  <?php
    include "navbar.php";
  ?><br>

    <div class="container">
    <h1>Data Pelanggan</h1>
    <form action = "tampil_pelanggan.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Masukkan ID\Nama Pelanggan"/>
    </form>
    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID Pelanggan</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Alamat </th>
      <th scope="col">Nomer Telepon</th>
      <th scope="col">Username</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_pelanggan = mysqli_query($koneksi, "select * from pelanggan where id_pelanggan like '%$cari%' or nama_pelanggan like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_pelanggan = mysqli_query($koneksi, "select * from pelanggan");
    }
    while ($data_pelanggan = mysqli_fetch_array($query_pelanggan)){?>
        <tr> 
            <td><?php echo $data_pelanggan["id_pelanggan"];?></td>
            <td><?php echo $data_pelanggan["nama_pelanggan"];?></td>
            <td><?php echo $data_pelanggan["alamat"];?></td>
            <td><?php echo $data_pelanggan["telp"];?></td>
            <td><?php echo $data_pelanggan["username"];?></td>

            <td><a
            href="ubah_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>"
            class="btn btn-success">Ubah</a> | <a
            href="hapus.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class=" btn-danger">Hapus</a>
            </td>

        </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>