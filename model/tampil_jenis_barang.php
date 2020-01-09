<?php
    require_once("koneksi.php");
    $data = mysqli_query($koneksi,"select * from jenis_barang");
?>