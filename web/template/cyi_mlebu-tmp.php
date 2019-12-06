<!DOCTYPE html>
<html lang="en" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Cyine ID">
    <title>Masuk - <?= $cyi["nama_app"] ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= $domain;?>assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="<?= $domain;?>assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/vendors/prism/prism.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/css/app.css">
  </head>
  <body data-col="1-column" class=" 1-column  blank-page blank-page">
    <div class="wrapper">
<section id="login">
    <div class="container-fluid">
        <div class="row full-height-vh">
            <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
                <div class="card px-4 py-2 box-shadow-2 width-400">
                    <div class="card-header text-center">
                        <img src="<?=$domain;?>assets/img/caulogo.png" alt="company-logo" class="mb-3" width="80">
                        <h4 class="text-uppercase text-bold-400 grey darken-1">Login</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <form>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="email" class="form-control form-control-lg" name="inputEmail" id="inputEmail" placeholder="ID" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-lg" name="inputPass" id="inputPass" placeholder="Sandi" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="text-center col-md-12">
                                        <button type="submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
    <!-- BEGIN VENDOR JS-->
    <script src="<?= $domain;?>assets/vendors/core/jquery-3.3.1.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/core/popper.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/core/bootstrap.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/perfect-scrollbar/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/prism/prism.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/matchHeight/jquery.matchHeight-min.js"></script>
    <script src="<?= $domain;?>assets/vendors/screenfull/screenfull.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/pace/pace.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="<?= $domain;?>assets/js/app-sidebar.js"></script>
    <script src="<?= $domain;?>assets/js/notification-sidebar.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>