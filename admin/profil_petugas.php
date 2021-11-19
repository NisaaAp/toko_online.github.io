<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Petugas </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <?php
        include "navbar.php"; 
        include "koneksi.php";
        $query_profil = mysqli_query($koneksi, "SELECT * FROM petugas 
        where id_petugas = '".$_SESSION['id_petugas']."'");
        $data_petugas=mysqli_fetch_array($query_profil);
        ?>
    
        <main class="container"> 
            <br><br><br>
            <h1 style="text-align: center;">Data Profil Anda</h1>
            <hr>
        <section class="container">
        <div class="col">
                <form action=""><input type="hidden" name="id_petugas" value="<?=$data_petugas['id_petugas']?>"></form>
                <table class="table table-hover table-striped mb-4">
                    <thead style="text-align: left;">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$data_petugas["nama_petugas"]?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><?=$data_petugas["username"]?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><?=$data_petugas["password"]?></td>
                    </tr>
                    <tr>
                        <td>LEVEL</td>
                        <td>:</td>
                        <td><?=$data_petugas["level"]?></td>
                    </tr>
                </thead>
            </table>
        </div>

        <a href="home.php" class="btn btn-success">Kembali ke halaman utama</a>
        <a href="tampil_petugas.php" class="btn btn-success">data petugas</a>
        <div style="float: right;">
            <a href="ubah_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>"
            class="btn btn-success">Ubah Akun Ini</a> | <a
            href="hapus.php?id_petugas=<?=$data_petugas['id_petugas']?>"
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