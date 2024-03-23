 <body class="hold-transition sidebar-mini">
     <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
             <!-- Left navbar links -->
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                 </li>
             </ul>

             <!-- Right navbar links -->
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                     <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                         <i class="fas fa-th-large"></i>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.navbar -->

         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
             <!-- Brand Logo -->
             <a href="<?= base_url('admin/dashboad') ?>" class="brand-link">
                 <img src="<?= base_url('assets') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                     class="brand-image img-circle elevation-3" style="opacity: .8">
                 <span class="brand-text font-weight-light">AdminLTE 3</span>
             </a>

             <!-- Sidebar -->
             <div class="sidebar">
                 <!-- Sidebar user (optional) -->
                 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                     <div class="image">
                         <img src="<?= base_url('assets') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                             alt="User Image">
                     </div>
                     <div class="info">
                         <a href="#" class="d-block">Alexander Pierce</a>
                     </div>
                 </div>

                 <!-- Sidebar Menu -->
                 <nav class="mt-2">
                     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                         data-accordion="false">
                         <li class="nav-item">
                             <a href="<?= base_url('admin/dashboad') ?>" class="nav-link">
                                 <i class="nav-icon fa-solid fa-gauge-high"></i>
                                 <p>
                                     Dasboard
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url('admin/users') ?>" class="nav-link">
                                 <i class="nav-icon fa-solid fa-users"></i>
                                 <p>
                                     Manajemen User
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa-solid fa-car-side"></i>
                                 <p>
                                     Manajemen Mobil
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa-solid fa-dollar-sign"></i>
                                 <p>
                                     Riwayat Transaksi
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa-regular fa-user"></i>
                                 <p>
                                     Manajemen Pelanggan
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa-solid fa-file-lines"></i>
                                 <p>
                                     Managenent Tipe Identitas
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa-solid fa-couch"></i>
                                 <p>
                                     Manajemen Carseat
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa-solid fa-gears"></i>
                                 <p>
                                     Pengaturan
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                                 <p>
                                     Logout
                                 </p>
                             </a>
                         </li>
                     </ul>
                 </nav>
                 <!-- /.sidebar-menu -->
             </div>
             <!-- /.sidebar -->
         </aside>

         <!-- Content Header (Page header) -->
         <div class="content-wrapper">
             <section class="content-header">
                 <div class="container-fluid">
                     <div class="row mb-2">
                         <div class="col-sm-6">
                             <h1><?= $title ?></h1>
                         </div>
                         <div class="col-sm-6">
                             <ol class="breadcrumb float-sm-right">
                                 <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboad') ?>">Dashboard</a></li>
                                 <?php foreach($breadcrumb as $item):?>
                                 <li class="breadcrumb-item active"><?= $item ?></li>
                                 <?php endforeach;?>
                             </ol>
                         </div>
                     </div>
                 </div><!-- /.container-fluid -->
             </section>
             <div class="container-fluid">
