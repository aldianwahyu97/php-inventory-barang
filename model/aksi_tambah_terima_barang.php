<?php
    include("koneksi.php");

    $tanggal_terima = $_POST['tanggal_terima'];
    $penyedia = $_POST['penyedia'];
    $no_reff = $_POST['no_reff'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO `terima_barang`(`id_terima`, `tanggal_terima`, `penyedia`, `no_reff`, `keterangan`) VALUES (null,'$tanggal_terima','$penyedia','$no_reff','$keterangan')";

    // $query2 = "INSERT INTO `detail_terima_barang`(`part_number`, `nama_barang`, `OuM`, `jumlah`, `id_terima`) VALUES (null,'$nama_barang','$OuM','$jumlah',null)";
    mysqli_query($koneksi,$query);

    header("location: ../tambah_data_terima_barang.php");
    // echo "berhasil";
?>