<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pustaka-Booking | <?= $judul; ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/'); ?>logo-pb.png">

    <!-- <link rel="stylesheet" href="<?= base_url('assets/'); ?>user/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="<?= base_url('assets/'); ?>vendor/fontawesomefree/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">Pustaka</a>
            <button class="navbar-toggler" type="button" datatoggle="collapse" data-target="#navbarNavAltMarkup" ariacontrols="navbarNavAltMarkup" aria-expanded="false" arialabel="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item navlink active" href="<?= base_url(); ?>">Beranda <span class="sronly">(current)</span></a>
                    <?php
                    if (!empty($this->session->userdata('email'))) { ?>
                        <a class="nav-item navlink" href="<?= base_url('booking'); ?>">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a>
                        <a class="nav-item navlink" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a>
                        <a class="nav-item navlink" href="<?= base_url('member/logout'); ?>"><i class="fas fw falogin"></i> Log out</a>
                    <?php } else { ?>
                        <a class="nav-item nav-link" data-toggle="modal" datatarget="#daftarModal" href="#"><i class="fas fw fa-login"></i> Daftar</a>
                        <a class="nav-item nav-link" data-toggle="modal" datatarget="#loginModal" href="#"><i class="fas fw fa-login"></i> Log in</a>

                    <?php } ?>
                    <span class="nav-item nav-link navright" style="display:block; marginleft:20px;">Selamat Datang <b><?= $user; ?></b></span>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">