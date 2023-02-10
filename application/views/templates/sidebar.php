<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>MUDA APPS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>
  <div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
      <nav class="navbar bg-light navbar-light">
        <a href="<?= base_url(''); ?>" class="navbar-brand mx-4 mb-3">
          <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>MUDA-APPS</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
          <div class="position-relative">
            <img class="rounded-circle" src="<?= base_url('assets/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
          </div>
          <div class="ms-3">
            <h6 class="mb-0">Administrator</h6>
            <span>Admin</span>
          </div>
        </div>
        <div class="navbar-nav w-100">
          <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
            <div class="dropdown-menu bg-transparent border-0">
              <a href="<?= base_url('siswa') ?>" class="dropdown-item">Siswa</a>
              <a href="<?= base_url('kelas') ?>" class="dropdown-item">Kelas</a>
              <a href="<?= base_url('spp') ?>" class="dropdown-item">SPP</a>
            </div>
          </div>
          <a href="<?= base_url('petugas') ?>" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Data Petugas</a>
          <a href="<?= base_url('pembayaran') ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Pembayaran</a>
          <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Laporan</a>
          <a href="#" class="nav-item nav-link"><i class="fa fa-sign-out-alt me-2"></i>Logout</a>
        </div>
      </nav>
    </div>
    <!-- Sidebar End -->