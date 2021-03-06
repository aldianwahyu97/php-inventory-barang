<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PT JB Paint - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- navbar -->
  <?php
    require("navbar.php")
  ?>
  <div id="wrapper">
    <!-- Sidebar -->
    <?php
      require("sidebar.php")
    ?>

    <div id="content-wrapper">
        
      <div class="container-fluid">
      <h3 style="padding-bottom: 10px;">Edit Jenis Barang</h3>
      <a href="jb_master_data.php" style="color:white" style="padding-bottom: 10px;"><button class="btn btn-primary" >Kembali</button></a> <br><br>
        <div class="card">
            <div class="card-header">Edit Jenis Barang</div>
            <div class="card-body">
                <?php
                    include 'model/koneksi.php';
                    $kode_jenis_barang = $_GET['kode_jenis_barang'];
                    $data = mysqli_query($koneksi,"select * from jenis_barang where kode_jenis_barang='$kode_jenis_barang'");
                    while($d = mysqli_fetch_array($data)){
                ?>
                <form action="model/aksi_ubah_jenis_barang.php" method="POST">
                    <input type="hidden" name="kode_jenis_barang" value="<?php echo $d['kode_jenis_barang']; ?>">
                    <div class="form-group">
                        <label for="kode_jenis_barang_ubah">Kode Jenis Barang:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kode Jenis Barang" name="kode_jenis_barang_ubah" value="<?php echo $d['kode_jenis_barang']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jenis Barang" name="jenis_barang" value="<?php echo $d['jenis_barang']; ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
                <?php 
                    }
                ?>
            </div>
            <div class="card-footer"></div>
        </div>  
      </div>
      <!-- /.container-fluid -->
      <!-- Sticky Footer -->
      <?php
        require("footer.php")
      ?>
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="assets/vendor/chart.js/Chart.min.js"></script>
  <script src="assets/vendor/datatables/jquery.dataTables.js"></script>
  <script src="assets/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="assets/js/demo/datatables-demo.js"></script>
  <script src="assets/js/demo/chart-area-demo.js"></script>

</body>

</html>
