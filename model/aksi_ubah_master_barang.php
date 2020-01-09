<?php
    include("koneksi.php");

    $kode_barang = $_POST['kode_barang'];
    $kode_barang_ubah = $_POST['kode_barang_ubah'];
    $barang = $_POST['barang'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];
    $jenis_barang = $_POST['jenis_barang'];
    $merk = $_POST['merk'];
    $satuan = $_POST['satuan'];

    $query = "UPDATE `data_barang` SET `kode_barang`='$kode_barang_ubah',`barang`='$barang',`deskripsi`='$deskripsi',`harga`='$harga',`keterangan`='$keterangan',`jenis_barang`='$jenis_barang',`merk`='$merk',`satuan`='$satuan' WHERE kode_barang = '$kode_barang'";

    mysqli_query($koneksi,$query);

    header("location: ../master_barang.php");
    // echo "berhasil";
?>