<?php
    include("koneksi.php");

    $kode_barang = $_POST['kode_barang'];
    $barang = $_POST['barang'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];
    $jenis_barang = $_POST['jenis_barang'];
    $merk = $_POST['merk'];
    $satuan = $_POST['satuan'];

    $query = "INSERT INTO `data_barang`(`kode_barang`, `barang`, `deskripsi`, `harga`, `keterangan`, `jenis_barang`, `merk`, `satuan`) VALUES ('$kode_barang','$barang','$deskripsi','$harga','$keterangan','$jenis_barang','$merk','$satuan')";

    mysqli_query($koneksi,$query);

    header("location: ../master_barang.php");
    // echo "berhasil";
?>