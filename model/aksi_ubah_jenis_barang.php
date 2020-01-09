<?php
    include("koneksi.php");

    $kode_jenis_barang = $_POST['kode_jenis_barang'];
    $kode_jenis_barang_ubah = $_POST['kode_jenis_barang_ubah'];
    $jenis_barang = $_POST['jenis_barang'];

    $query = "UPDATE `jenis_barang` SET `kode_jenis_barang`='$kode_jenis_barang_ubah',`jenis_barang`='$jenis_barang' WHERE kode_jenis_barang='$kode_jenis_barang'";

    mysqli_query($koneksi,$query);

    header("location: ../jb_master_data.php");
    // echo "berhasil";
?>