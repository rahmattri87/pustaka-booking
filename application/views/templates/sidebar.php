<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-16">
      <i class="fas fa-shopping-bag"></i>
    </div>
    <div class="sidebar-brand-text mx-4">ARDS-BOOK</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">



  <!-- Looping Menu-->

  <!-- Heading -->
  <div class="sidebar-heading">
    My Profile
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <!-- Nav Item - Dashboard -->

  <li class="nav-item">
    <a class="nav-link pb-0" href="<?= base_url('user/index'); ?>">
      <i class="fa fa-fw fa-user"></i>
      <span>Profile</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider mt-4">

  <!-- Heading -->
  <div class="sidebar-heading">
    Master Data
  </div>

  <li class="nav-item">
    <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
      <i class="fa fa-fw fa-book"></i>
      <span>Data Anggota</span></a>
  </li>
  </li>
  <li class="nav-item">
    <a class="nav-link pb-0" href="<?= base_url('buku/index'); ?>">
      <i class="fa fa-fw fa-book"></i>
      <span>Data Buku</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
      <i class="fa fa-fw fa-book"></i>
      <span>Kategori Buku</span></a>
  </li>




  <!-- Divider -->
  <hr class="sidebar-divider d-one d-md-block">
  <!-- Nav Item - CHart -->
  <li class="nav-item">
    <a class="nav-link pb-0" href="<?= base_url('autentifikasi/logout'); ?>">
      <i class="fas fa-sign-out-alt fa-fw)"></i>
      <span>logout</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar --   > 