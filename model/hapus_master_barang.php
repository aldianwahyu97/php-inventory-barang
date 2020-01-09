<?php 
    include 'koneksi.php';
    $kode_barang = $_GET['kode_barang'];
    mysqli_query($koneksi,"delete from data_barang where kode_barang='$kode_barang'");
    header("location:../master_barang.php");
?>