<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistem Informasi Tracer Study </title>
  <link rel="icon" href="<?php echo base_url('assets/siluni//images/logof.png') ?>" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendor/bootstrap/css/bootstrap.min.css">
  <script src="<?php echo base_url('assets/template/vendor') ?>/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/vendor/bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendor/fontawesome-free-5.9.0-web/css/all.css">
  <!-- datatable -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/siluni//datatables/jquery.dataTables.min.css" type="text/css">
  <script src="<?php echo base_url(); ?>/assets/siluni//datatables/jquery.dataTables.min.js" type="text/javascript"></script>



  <style>
    .fakeimg {
      height: 250px;
      background: #aaa;
    }
  </style>
</head>

<body>



  <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #03626F">
    <div class="container ">
      <a class="navbar-brand " href="<?php echo base_url('beranda'); ?>">
        <img src="<?php echo base_url(); ?>/assets/template//img/logof.png" alt="Logo" width="70" height="70">
        Tracer Study
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav justify-center">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('beranda'); ?>">Beranda</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Pengguna
              </a>
              <div class="dropdown-menu">
                <?php foreach ($prodi as $p) { ?>
                  <a style="background-color:#119db59c" class='dropdown-item' href="<?php echo base_url('pengguna/Pengguna/daftarPengguna/' . $p->id) ?>"><?php echo $p->nama_prodi ?></a>
                <?php } ?>

              </div>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Statistik
              </a>
              <div class="dropdown-menu">
                <?php foreach ($prodi as $p) { ?>
                  <a style="background-color:#119db59c" class='dropdown-item' href="<?php echo base_url('Statistik/alumni/' . $p->id) ?>"><?php echo $p->nama_prodi ?></a>
                <?php } ?>
              </div>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Berita Alumni
              </a>
              <div class="dropdown-menu">
                <a style="background-color:#119db59c" class='dropdown-item' href="<?php echo base_url('berita_alumni') ?>">Info Alumni</a>
                <a style="background-color:#119db59c" class='dropdown-item' href="<?php echo base_url('berita_alumni/tampil_kegiatan') ?>">Kegiatan </a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('berita_alumni/tampil_lowongan') ?>">Lowongan Pekerjaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentang">Tentang</a>
            </li>

            <!-- Dropdown -->

            <li class="nav-item">
              <a class="nav-link btn-info" href="<?php echo  site_url('Login') ?>"><i class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>

          </ul>
        </div>
      </div>
  </nav>
</body>