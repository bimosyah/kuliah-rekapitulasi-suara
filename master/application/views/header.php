<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rekapitulasi-Suara</title>
  <meta name="description" content="Sufee Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>

  <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/flag-icon.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/cs-skin-elastic.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/scss/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/vector-map/jqvmap.min.css') ?>">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
  <!-- Left Panel -->

  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="<?php echo site_url('Dashboard') ?>">Rekapitulasi - Suara</a>
        <a class="navbar-brand hidden" href="<?php echo site_url('') ?>">R-S</a>
      </div>

      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="<?php if($this->uri->segment(1) == 'Dashboard') echo 'active' ?> ?>"><a href="<?php echo site_url('Dashboard') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a></li>

          <h3 class="menu-title">Menu</h3><!-- /.menu-title -->

          <li class="<?php if($this->uri->segment(1) == 'Calon') echo 'active' ?>"><a href="<?php echo site_url('Calon') ?>"><i class="menu-icon fa fa-users"></i>Data Calon</a></li>

         <!--  <li class="<?php if($this->uri->segment(1) == 'Jenis') echo 'active' ?>"><a href="<?php echo site_url('Jenis') ?>"><i class="menu-icon fa fa-columns"></i>Data Jenis Pemilu</a></li> -->

          <li class="<?php if($this->uri->segment(1) == 'Kecamatan') echo 'active' ?>"><a href="<?php echo site_url('Kecamatan') ?>"> <i class="menu-icon fa fa-list-alt"></i>Data Kecamatan</a></li>

          <li class="<?php if($this->uri->segment(1) == 'Desa') echo 'active' ?>"><a href="<?php echo site_url('Desa') ?>"> <i class="menu-icon fa fa-align-justify"></i>Data Kelurahan</a></li>

          <li class="<?php if($this->uri->segment(1) == 'TPS') echo 'active' ?>"><a href="<?php echo site_url('TPS') ?>"> <i class="menu-icon fa fa-list-ul"></i>Data TPS</a></li>

          <li class="<?php if($this->uri->segment(1) == 'Suara') echo 'active' ?>"><a href="<?php echo site_url('Suara') ?>"><i class="menu-icon fa fa-table"></i>Data Suara</a></li>

          <h3 class="menu-title">Petugas</h3><!-- /.menu-title -->

          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
              <i class="menu-icon fa fa-user"></i>Data Petugas
            </a>
            <ul class="sub-menu children dropdown-menu">
              <li class="<?php if($this->uri->segment(1) == 'Petugas') echo 'active' ?>"><i class="fa fa-user"></i><a href="<?php echo site_url('Petugas') ?>">Data Petugas</a></li>

              <li class="<?php if($this->uri->segment(1) == 'Login') echo 'active' ?>"><i class="fa fa-lock"></i><a href="<?php echo site_url('Login') ?>">Login Petugas</a></li>
            </ul>
          </li>

        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
  </aside><!-- /#left-panel -->

</body>