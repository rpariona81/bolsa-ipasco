<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= getenv('APP_NAME') ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro is powerful and clean admin dashboard template">
    <meta name="robots" content="noindex,nofollow">
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

<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-kadence text-white">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img class="img rounded-circle mb-10" src="<?= base_url('public/img/app/logo_2023.png') ?>" height="80" />
                &nbsp;&nbsp;&nbsp;IESTP "RICARDO RAMOS PLATA"
            </a>
        </div>
    </nav>
    <div class="jumbotron text-center mt-5 mb-5 pb-3">
        <div class="container">
            <h1 class="jumbotron-heading">Conoce nuestra Bolsa Laboral</h1>
            <p class="lead text-muted">Los estudiantes y egresados podrán acceder a las oportunidades de trabajo que presentan las empresas a nivel nacional y así lograr ubicarse en un puesto de acuerdo a su profesión.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-md-6 col-xl-4 mb-4">
                <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                    <img class="card-img-top" src="<?= base_url('public/img/app/login1.jpeg') ?>" alt="Estudiantes/Egresados" width="200" height="260">
                    <div class="card-body text-start p-3 w-100">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a class="btn btn-large btn-primary px-5 mx-auto" href="<?=base_url('/wp-login')?>"><strong>Estudiantes y egresados</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-xl-4 mb-4">
                <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                    <img class="card-img-top" src="<?= base_url('public/img/app/login2.jpg') ?>" alt="Docentes" width="200" height="260">
                    <div class="card-body text-start p-3 w-100">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a class="btn btn-large btn-info px-5 mx-auto" href="<?=base_url('/wp-login')?>"><strong>Docentes</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-xl-4 mb-4">
                <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                    <img class="card-img-top" src="<?= base_url('public/img/app/login3.png') ?>" alt="Administrador" width="200" height="260">
                    <div class="card-body text-start p-3 w-100">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a class="btn btn-large btn-warning px-5 mx-auto" href="<?=base_url('/wp-admin')?>"><strong>Administrador</strong></a>
                            </div>
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