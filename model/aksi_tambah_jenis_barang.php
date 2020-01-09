<?php
    include("koneksi.php");

    $kode_jenis_barang = $_POST['kode_jenis_barang'];
    $jenis_barang = $_POST['jenis_barang'];

    $query = "INSERT INTO `jenis_barang`(`kode_jenis_barang`, `jenis_barang`) VALUES ('$kode_jenis_barang','$jenis_barang')";

    mysqli_query($koneksi,$query);

    // header("location: jb_master_data_tambah.php")
    echo "berhasil";
?>