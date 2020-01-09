<?php 
    include 'koneksi.php';
    $kode_satuan = $_GET['kode_satuan'];
    mysqli_query($koneksi,"delete from satuan where kode_satuan='$kode_satuan'");
    header("location:../satuan_master_data.php");
?>