<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
 <br>

    <div class="container">
    <h1>Data Petugas</h1>
    <form action = "tampil_petugas.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Masukkan ID\Nama Petugas"/>
    </form>
    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID Petugas</th>
      <th scope="col">Nama Petugas</th>
      <th scope="col">Username</th>
      <th scope="col">Level</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_petugas = mysqli_query($koneksi, "select * from petugas where id_petugas like '%$cari%' or nama_petugas like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_petugas = mysqli_query($koneksi, "select * from petugas");
    }
    while ($data_petugas = mysqli_fetch_array($query_petugas)){?>
        <tr> 
            <td><?php echo $data_petugas["id_petugas"];?></td>
            <td><?php echo $data_petugas["nama_petugas"];?></td>
            <td><?php echo $data_petugas["username"];?></td>
            <td><?php echo $data_petugas["level"];?></td>

            <td><a
            href="ubah_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>"
            class="btn btn-success">Ubah</a> | <a
            href="hapus.php?id_petugas=<?=$data_petugas['id_petugas']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class="btn btn-danger">Hapus</a>
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