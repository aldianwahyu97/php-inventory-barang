<?php 
    include 'koneksi.php';
    $kode_jenis_barang = $_GET['kode_jenis_barang'];
    mysqli_query($koneksi,"delete from jenis_barang where kode_jenis_barang='$kode_jenis_barang'");
    header("location:../jb_master_data.php");
?>