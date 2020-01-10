<?php
    include("koneksi.php");
    
    $id_terima = $_POST['id_terima'];
    $nama_barang = $_POST['nama_barang'];
    $OuM = $_POST['OuM'];
    $jumlah = $_POST['jumlah'];
    // $query = "INSERT INTO `terima_barang`(`id_terima`, `tanggal_terima`, `penyedia`, `no_reff`, `keterangan`) VALUES (null,'$tanggal_terima','$penyedia','$no_reff','$keterangan')";

    $query = "INSERT INTO `detail_terima_barang`(`part_number`, `nama_barang`, `OuM`, `jumlah`, `id_terima`) VALUES (null,'$nama_barang','$OuM',$jumlah,$id_terima)";
    mysqli_query($koneksi,$query);

    header("location: ../tambah_data_terima_barang.php");
    // echo "berhasil";
?>