<?php 

include "koneksi.php";
    $id_produk = $_GET['id_produk'];
    $folder = "foto/";

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

    $sql = "DELETE FROM toko_produk where id_produk = '$id_produk'";

    //eksekusi perintah delete
    $result = mysqli_query($koneksi, $sql);

if ($result) {
    echo "<script>alert('Berhasil');location.href='tampil_produk.php';</script>";
}
else {
    echo "<script>alert('Gagal');location.href='tampil_produk.php';</script>";
    echo mysqli_error($koneksi);
} 
   

?>
