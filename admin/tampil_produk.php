<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  <?php
    include "navbar.php";
    ?><br>

    <div class="container">
    <h1>Data Produk</h1>
    <form action = "tampil_produk.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Masukkan ID\Nama Produk"/>
    </form>
    <a href="tambah_produk.php"
            class="btn btn-success">Tambahkan Produk</a> 
    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID Produk</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>

  </thead>

  <tbody>
    <?php
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_produk = mysqli_query($koneksi, "select * from toko_produk where id_produk like '%$cari%' or nama_produk like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_produk = mysqli_query($koneksi, "select * from toko_produk");
    }
    while ($data_produk = mysqli_fetch_array($query_produk)){?>
        <tr> 
            <td><?php echo $data_produk['id_produk'];?></td>
            <td><?php echo $data_produk['nama_produk'];?></td>
            <td><?php echo $data_produk['harga'];?></td>
            <td><?php echo $data_produk['deskripsi'];?></td>
            <td><img src="foto/<?=$data_produk['foto_produk']?>" width="100" height="140"></td>

            
            <td><a
            href="ubah_produk.php?id_produk=<?=$data_produk['id_produk']?>"
            class="btn btn-success">Ubah</a> | <a
            href="hapus_produk.php?id_produk=<?=$data_produk['id_produk']?>"
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

