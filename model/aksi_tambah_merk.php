<?php
    include("koneksi.php");

    $kode_merk = $_POST['kode_merk'];
    $merk = $_POST['merk'];

    $query = "INSERT INTO `merk`(`kode_merk`, `nama_merk`) VALUES ('$kode_merk','$merk')";

    mysqli_query($koneksi,$query);

    header("location: ../merk_master_data.php");
    // echo "berhasil";
?>