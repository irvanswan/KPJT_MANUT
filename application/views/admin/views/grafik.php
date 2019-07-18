<?php
$user=$this->session->userdata('username');
?>
<!DOCTYPE html>
<html lang="en">

 <?php $this->load->view('admin/views/head') ?>

  <body id="page-top">

    <?php $this->load->view('admin/views/navbar')?>
    <div id="wrapper">

      <!-- Sidebar -->
      <?php $this->load->view('admin/views/sidebar'); ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          

          <!-- Icon Cards-->
           <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Produk Olahan</li>
          </ol>

          <!-- Area Chart Example-->
          <div class="card mb-3 border-dark " style="width: 100%;">
            <div class="card-header">
              <i class="fas fa-utensils"></i>
              Produk Olahan</div>
            

              <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th width="10%">No</th>
        <th>Id Produk</th>
        <th>Nama Produk Olahan</th>
        <th>Tanggal Produksi</th>
        <th>Bahan</th> 
        <th>Jumlah Bahan</th>
        <th>Harga Bahan</th>
        <th>Total Biaya</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no=1;
      foreach($biaya as $by){?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $by->id_history ?></td>
        <td><?php echo $by->id_produk ?></td>
        <td><?php echo $by->tgl_produksi ?></td>
        <td><?php echo $by->bahan ?></td>
        <td><?php echo $by->jml_bahan ?></td>
        <td><?php echo $by->harga_bahan ?></td>
        <td><?php echo $by->total_biaya ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

          
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
         

        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Pandjie 1884</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php $this->load->view('admin/modals/modallogout')?>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/admin/vendor/chart.js/Chart.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/datatables/dataTables.bootstrap4.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/admin/js/sb-admin.min.js') ?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('assets/admin/js/demo/datatables-demo.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/demo/chart-area-demo.js') ?>"></script>

  </body>

</html>


         

        <!-- Sticky Footer -->

