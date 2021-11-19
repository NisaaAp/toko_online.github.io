<?php
    
        $id_produk=$_POST['id_produk'];
        $nama_produk = $_POST ['nama_produk'];
        $deskripsi = $_POST ['deskripsi'];
        $harga = $_POST ['harga'];

        $temp = $_FILES['foto']['tmp_name'];
        $type = $_FILES['foto']['type'];
        $size = $_FILES['foto']['size'];
        $name = rand(0,9999).$_FILES['foto']['name'];
        $folder = "foto/";

        include "koneksi.php";
         //mendapatkan data buku yang diubah
    $sql ="select * from toko_produk where id_produk = '$id_produk'";
// eksekusi perintah SQL
    $query = mysqli_query($koneksi, $sql);
// konversi ke array
    $produk = mysqli_fetch_array($query);

// proses hapus file yang lama
    $path = $folder.$produk["foto_produk"];
//cek eksistensi file yang akan dihapus
    if(file_exists($path)){
    //jika ada file yang lama ada, maka kita hapus
    unlink($path);
}

    // upload file yang baru
    move_uploaded_file($temp, $folder.$name);
    $sql = "update toko_produk set nama_produk = '$nama_produk', 
     deskripsi = '$deskripsi', harga = '$harga', foto_produk = '$name' where id_produk='$id_produk'";

    $result = mysqli_query ($koneksi, $sql);

   if($result){
    echo "<script>alert('Berhasil');location.href='tampil_produk.php';</script>";
}
else{
    echo "<script>alert('Gagal');location.href='tambah_produk.php';</script>";
    echo mysqli_error($koneksi);
}
      
?>