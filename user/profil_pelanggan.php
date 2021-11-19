<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pelanggan </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <?php
        include "navbar.php"; 
        include "koneksi.php";
        $query_profil = mysqli_query($koneksi, "SELECT * FROM pelanggan 
        where id_pelanggan = '".$_SESSION['id_pelanggan']."'");
        $data_pelanggan=mysqli_fetch_array($query_profil);
        ?>
    
        <main class="container"> 
            <br><br><br>
            <h1 style="text-align: center;">Data Profil Anda</h1>
            <hr>
        <section class="container">
        <div class="col">
                <form action=""><input type="hidden" name="id_pelanggan" value="<?=$data_pelanggan['id_pelanggan']?>"></form>
                <table class="table table-hover table-striped mb-4">
                    <thead style="text-align: left;">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$data_pelanggan["nama_pelanggan"]?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?=$data_pelanggan["alamat"]?></td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:</td>
                        <td><?=$data_pelanggan["telp"]?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><?=$data_pelanggan["username"]?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><?=$data_pelanggan["password"]?></td>
                    </tr>
                </thead>
            </table>
        </div>

        <a href="home.php" class="btn btn-success">Kembali ke halaman utama</a>
        <div style="float: right;">
        <a
            href="ubah_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>"
            class="btn btn-success">Ubah Akun Ini</a> | <a
            href="hapus.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class="btn btn-danger">Hapus Akun Ini</a>
    </div>
        </section>        
        </main>   
    <?php
        include "footer.php";
    ?>


</body>
</html>