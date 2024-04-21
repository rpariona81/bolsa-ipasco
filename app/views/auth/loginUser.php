<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= getenv('APP_NAME') ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('public/img/app/logo_2023.png') ?>">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="<?= base_url('public/datatable/css/bootstrap.min.css') ?>" />

    <!--<link rel="stylesheet" href="<?= base_url('public/datatable/css/dataTables.bootstrap5.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('public/datatable/css/buttons.bootstrap5.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('public/datatable/css/responsive.bootstrap5.min.css') ?>" />-->

    <link href="<?= base_url('public/css/styles.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('public/css/mystyle.css') ?>" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body class="bg-kadence">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="container">
            <div class="login-logo text-center mt-5">
                <img src="<?= base_url('public/img/app/logo_2023.png') ?>" width="250" height="250" id="logo">
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-xl-5 mb-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-4">
                        <!--<div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>-->
                        <div class="card-header text-center">
                            <h3>Bienvenido(a)</h3>
                            <p class="font-weight-light my-4 mt-0 mb-0">Ingresa tu usuario y contraseña para iniciar sesión</p>
                        </div>

                        <div class="card-body pt-3 pb-3">
                            <?php if ($this->session->flashdata('flashSuccess')) : ?>
                                <p class='alert alert-success'> <?= $this->session->flashdata('flashSuccess') ?> </p>
                            <?php endif ?>

                            <?php if ($this->session->flashdata('flashError')) : ?>
                                <p class='alert alert-danger'> <?= $this->session->flashdata('flashError') ?> </p>
                            <?php endif ?>

                            <?php if ($this->session->flashdata('flashInfo')) : ?>
                                <p class='alert alert-info'> <?= $this->session->flashdata('flashInfo') ?> </p>
                            <?php endif ?>

                            <?php if ($this->session->flashdata('flashWarning')) : ?>
                                <p class='alert alert-warning'> <?= $this->session->flashdata('flashWarning') ?> </p>
                            <?php endif ?>

                            <?= form_open('authcontroller/loginUser') ?>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="username" name="username" type="text" placeholder="Usuario" value="<?= set_value('username') ?>" size="50" required />
                                <label for="inputUser">Usuario</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" value="<?= set_value('password') ?>" size="50" required />
                                <label for="inputPassword">Contraseña</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                <a class="btn btn-warning" href="<?=base_url()?>">Regresar</a>&nbsp;&nbsp;
                                <input class="btn btn-primary" id="btnLogin" type="submit" value="Ingresar"></input>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Required js -->
    <!-- -------------------------------------------------------------- -->
    <!-- JavaScript Libraries -->
    <script src="<?= base_url('public/datatable/js/bootstrap.bundle.min.js') ?>"></script>

    <script src="<?= base_url('public/js/scripts.js') ?>"></script>
    <!--<script src="<?= base_url('public/datatable/js/jquery-3.7.0.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/dataTables.bootstrap5.min.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/buttons.bootstrap5.min.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/responsive.bootstrap5.min.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/jszip.min.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('public/datatable/js/buttons.colVis.min.js') ?>"></script>-->

</body>

</html>