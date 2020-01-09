<?php 
    include 'koneksi.php';
    $kode_merk = $_GET['kode_merk'];
    mysqli_query($koneksi,"delete from merk where kode_merk='$kode_merk'");
    header("location:../merk_master_data.php");
?>