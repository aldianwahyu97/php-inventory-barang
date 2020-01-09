<?php
    include("koneksi.php");

    $kode_satuan = $_POST['kode_satuan'];
    $satuan = $_POST['satuan'];

    $query = "INSERT INTO `satuan`(`kode_satuan`, `nama_satuan`) VALUES ('$kode_satuan','$satuan')";

    mysqli_query($koneksi,$query);

    header("location: ../satuan_master_data.php");
    // echo "berhasil";
?>