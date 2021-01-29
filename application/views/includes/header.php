<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <!-- <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />


  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css"> -->
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
   <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css" />
    <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">
 <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">

    <style>
      .error{
        color:red;
        font-weight: normal;
      }
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- <body class="sidebar-mini skin-black-light"> -->
  <!-- skin-blue sidebar-mini -->
  <body class="hold-transition 
    <?php
      if($role == ROLE_ADMIN){
        print("skin-green");
      }
      elseif($role == ROLE_DINSOS){
        print("skin-red");
      }
      elseif($role == ROLE_SUR){
        print("skin-yellow");
      }
      elseif($role == ROLE_VAL){
        print("skin-purple");
      }
      elseif($role == ROLE_KEL){
        print("skin-blue");
      } 
      else{
        print("skin-black");
      }
    ?> fixed sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>DATA</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">PUSAT <b>DATA</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avataruser.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/avataruser.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <!-- <a href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a> -->
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/avataruser.jpg" class="img-circle" alt="User Image"/>
          <!-- <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <!-- <li class="treeview">
              <a href="<?=$this->config->base_url()?>calon" >
                <i class="fa fa-list-ol"></i>
                <span>Calon Penerima Manfaat</span>
              </a>
            </li> -->
             <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-list-ol"></i>
                <span>Calon Penerima Manfaat</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=$this->config->base_url()?>calon"><i class="fa fa-circle-o"></i>     Data Calon</a></li>
                <li><a href="<?php echo base_url(); ?>syarat"><i class="fa fa-circle-o"></i>     Persyaratan</a></li>
                <li><a href="<?php echo base_url(); ?>kriteria"><i class="fa fa-circle-o"></i>     Foto Kondisi Rumah Existing</a></li>
              </ul>
            </li> -->
            <?php
            if($role == ROLE_ADMIN || $role == ROLE_VAL)
            {
            ?>
            <li class="treeview">
              <a href="<?=$this->config->base_url()?>validator/validatorListing" >
                <i class="fa fa-check"></i>
                <span>Validasi Survey MBR</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?=$this->config->base_url()?>validatorskm/validatorListing" >
                <i class="fa fa-check"></i>
                <span>Validasi Survey SKM</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?=$this->config->base_url()?>cek/cekListing" >
                <i class="fa fa-list"></i>
                <span>Cek Validasi</span>
              </a>
            </li>
            <!-- <li class="treeview">
              <a href="<?=$this->config->base_url()?>cekSKM/cekListing" >
                <i class="fa fa-list"></i>
                <span>Cek Validasi SKM</span>
              </a> --><!-- 
            </li>
            <li class="treeview">
              <a href="<?=$this->config->base_url()?>surveyor" >
                <i class="fa fa-search"></i>
                <span>Surveyor</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>monitor" >
                <i class="fa fa-search"></i>
                <span>Monitor</span>
              </a>
            </li> -->
            <li class="treeview">
              <a href="<?php echo base_url(); ?>survey/">
                <i class="fa fa-users"></i>
                <span>Download Rekap Survey</span>
              </a>
            </li>
            <!-- <li class="treeview">
              <a href="#" >
                <i class="fa fa-folder-open"></i>
                <span>Verifikasi Berkas</span>
              </a>
            </li> -->
            <?php
            }
            if($role == ROLE_ADMIN || $role == ROLE_SUR)
            {
            ?>
            <li class="treeview">
              <a href="<?=$this->config->base_url()?>validator/validatorListing" >
                <i class="fa fa-camera"></i>
                <span>Dokumentasi Survey MBR</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?=$this->config->base_url()?>validatorskm/validatorListing" >
                <i class="fa fa-camera"></i>
                <span>Dokumentasi Survey SKM</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?=$this->config->base_url()?>cekdokumentasi/cekListing" >
                <i class="fa fa-list"></i>
                <span>Rekap Dokumentasi Survey</span>
              </a>
            </li>
            <?php
            }
            if($role == ROLE_ADMIN || $role == ROLE_KEL)
            {
            ?>
            <!-- <li class="treeview">
              <a href="#" >
                <i class="fa fa-eye"></i>
                <span>Menu Kelurahan</span>
              </a>
            </li> -->
            <?php
            }
            if($role == ROLE_ADMIN || $role == ROLE_DINSOS)
            {
            ?>
            <!-- <li class="treeview">
              <a href="#" >
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
              </a>
            </li> -->
            <?php
            }
            if($role == ROLE_ADMIN)
            {
            ?>
            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Users</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>userListing"><i class="fa fa-circle-o"></i>Manage User</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Role</a></li>
              </ul>
            </li> -->
            <li class="header">ADMIN MENU</li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>userListing" >
                <i class="fa fa-users"></i>
                <span>Users</span>
              </a>
            </li>
            <?php
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      </div>
      </body>
      </html>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.2.1.js"></script>
 -->
<!-- <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script> -->
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- Morris.js charts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>
<!-- bootstrap time picker -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script> -->
<script type="text/javascript">
    $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>