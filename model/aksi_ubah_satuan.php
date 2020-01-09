<?php
    include("koneksi.php");

    $kode_satuan = $_POST['kode_satuan'];
    $kode_satuan_ubah = $_POST['kode_satuan_ubah'];
    $nama_satuan = $_POST['nama_satuan'];

    $query = "UPDATE `satuan` SET `kode_satuan`='$kode_satuan_ubah',`nama_satuan`='$nama_satuan' WHERE kode_satuan='$kode_satuan'";

    mysqli_query($koneksi,$query);

    header("location: ../satuan_master_data.php");
    // echo "berhasil";
?>