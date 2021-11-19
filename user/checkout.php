<?php
 session_start();
 include "koneksi.php";
 $cart= @$_SESSION['cart'];

 if(count($cart)>0){


 // insert ke tabel transaksi
       $query=mysqli_query($koneksi,"INSERT INTO `transaksi`(`id_transaksi`,`id_pelanggan`, `tgl_transaksi`, `id_petugas`) 
       VALUES('','".$_SESSION['id_pelanggan']."','".date('Y-m-d')."',1)");
       //echo "INSERT INTO `transaksi`(`id_transaksi`,`id_pelanggan`, `tgl_transaksi`, `id_petugas`) 
       //VALUES('','".$_SESSION['id_pelanggan']."','".date('Y-m-d').",1')";
       
// insert ke tabel detail_transaksi
if ($query) {
       $id=mysqli_insert_id($koneksi);
       foreach ($cart as $key_produk => $val_produk) {
       mysqli_query($koneksi,"insert into detail_transaksi (id_detail_transaksi,id_transaksi,id_produk,qty,subtotal) 
       value('','".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."','".$val_produk['harga']."')");
// echo "insert into detail_transaksi (id_detail_transaksi,id_transaksi,id_produk,qty,subtotal) 
// value('','".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."','".$val_produk['harga']."')";
      }
 unset($_SESSION['cart']);
 echo '<script>alert("Anda berhasil membeli produk");location.href="transaksi.php"</script>';
 }else{
       echo "gagal";
 }
}
?>