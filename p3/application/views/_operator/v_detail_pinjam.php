<?php 
$this->load->view('_bagian/header');
?>
<div class="wrapper" style="height: auto; min-height: 100%;">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>INV</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Inventaris</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              
              <span class="hidden-xs"><?php echo $this->session->userdata('nama');?> - <?php echo $this->session->userdata('level');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  <?php echo $this->session->userdata('nama');?> - <?php echo $this->session->userdata('level');?>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('index.php/c_operator/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li>
          <a href="<?php echo site_url('c_operator/tampil_peminjaman');?>">
            <i class="fa fa-tag text-success"></i> <span>Peminjaman</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('c_operator/tampil_pengembalian');?>">
            <i class="fa fa-book text-primary"></i> <span>Pengembalian</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 921px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Peminjaman Barang
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <a href="<?php echo site_url().'/c_operator/tampil_tambah_detail_pinjam/?id='.$this->input->get('id');?>" class="btn btn-primary" style="margin:10px;">
                <span class="glyphicon glyphicon-plus"></span>  Tambah Barang Yang Dipinjam
          </a>
        <div class="box" >
          <div class="box-header">
            <h3>Data Peminjaman</h3>
            <div class="box-body">
              <table class="table table-bordered table-striped ptgs" >
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Pinjam</th>
                  <th>Aksi</th>
                </tr>  
              </thead>
              <tbody>
              <?php
              $no = 0;
              foreach ($detail_pinjam as $row) {
              $no++;
              ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $row->nama_barang;?></td>
                  <td><?php echo $row->jumlah_pinjam;?></td>
                  <td>
                    <a href="javascript:;"
                    data-id="<?php echo $row->id_detail_pinjam;?>"
                    data-nama="<?php echo $row->nama_barang;?>"
                    data-toggle="modal"
                    data-target="#hapus_detail_pinjam"
                     class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
            <a href="<?php  echo base_url()."index.php/c_operator/tampil_peminjaman"?>" class="btn btn-warning" style="margin:10px;"> Kembali
          </a>
        </div>
      </div>
    </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright © 2019 Andreas Prasetya</a>.</strong> All rights
    reserved.
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

<?php 
  $this->load->view('_modal/hapus_detail_pinjam');
  $this->load->view('_bagian/footer');
  $this->load->view('_modal/skrip');
?>
<script>
  $(function (){
    $('.ptgs').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


</body></html>