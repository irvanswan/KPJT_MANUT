
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
            <li class="breadcrumb-item active">Input Produk Tani</li>
          </ol>

          <!-- Area Chart Example-->
          <div class="card mb-3 border-dark " style="width: 30rem;">
            <div class="card-header">
              <i class="fas fa-newspaper"></i>
              Input Kegiatan</div>
            <div class="card-body">


              <form action="<?= base_url('Admin/form_input_tani') ?>" method="post" enctype="multipart/form-data"><!--multipart/form-data berfungsi supaya file dapat diambil -->
                <div class="form-group">
                  <label for="idmakanan">Id Kegiatan</label>
                  <input type="text" name="id_produk" class="form-control" id="idmakanan" aria-describedby="makanan" placeholder="id Kegiatan">
               
                  <label for="namamakanan">Nama Kegiatan</label>
                  <input type="text" name="nama_produk" class="form-control" id="namamakanan" placeholder="Nama Kegiatan">

                  <label for="namamakanan">Deskripsi</label>
                  <input type="text" name="nama_produk" class="form-control" id="namamakanan" placeholder="Deskripsi">

                  <label for="namamakanan">Tanggal Kegiatan</label>
                  <input type="date" id="start" name="trip-start"
                  value="2019-07-22"></br>

                  <label for="namamakanan">Tanggal Postingan</label>
                  <input type="date" id="start" name="trip-start"
                  value="2019-07-22"></br></br>

                  <label for="foto">Foto Kegiatan</label>
                  <input type="file" class="form-control-file" id="foto">
           
                
                  <!--<label>Pilih gambar</label><br>
                  <input type="file" name="ambilgambar" value="Pilih gambar" required oninvalid="this.setCustomValidity('Silahkan pilih gambar terlebih dahulu')">-->
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
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

