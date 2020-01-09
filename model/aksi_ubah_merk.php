<?php
    include("koneksi.php");

    $kode_merk = $_POST['kode_merk'];
    $kode_merk_ubah = $_POST['kode_merk_ubah'];
    $merk = $_POST['merk'];

    $query = "UPDATE `merk` SET `kode_merk`='$kode_merk_ubah',`nama_merk`='$merk' WHERE kode_merk='$kode_merk'";

    mysqli_query($koneksi,$query);

    header("location: ../merk_master_data.php");
    // echo "berhasil";
?>