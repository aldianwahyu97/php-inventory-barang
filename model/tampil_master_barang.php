<?php
    require_once("koneksi.php");
    $data = mysqli_query($koneksi,"select * from data_barang");
?>