
<?php
    if($_POST){
        $nama_pelanggan=$_POST['nama_pelanggan'];
        $alamat=$_POST['alamat'];
        $telp=$_POST['telp'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        if (empty($nama_pelanggan)) {
            echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='registrasi.php';</script>";
        }

        elseif (empty($username)) {
            echo "<script>alert('username pelanggan tidak boleh kosong');location.href='registrasi.php';</script>";
        }

        elseif (empty($password)) {
            echo "<script>alert('password pelanggan tidak boleh kosong');location.href='registrasi.php';</script>";
        }

        else {
            include "koneksi.php";
            $insert=mysqli_query($koneksi,"INSERT INTO pelanggan (nama_pelanggan, alamat, telp, username, password)
            value
            ('".$nama_pelanggan."','".$alamat."','".$telp."','".$username."','".md5($password)."')") or die(mysqli_error($koneksi));
            if ($insert) {
                echo "<script>alert('Sukses menambahkan pelanggan');location.href='registrasi.php';</script>";
            }

            else {
                echo "<script>alert('Gagal menambahkan pelanggan');location.href='registrasi.php';</script>";
            }
        }
    }
?>
      