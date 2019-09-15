<!DOCTYPE html>
<html lang="en" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Convex bootstrap 4 admin dashboard template</title>
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
                        <h4 class="text-uppercase text-bold-400 grey darken-1">Karyawan</h4>
	                    <div id=debug></div>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                        <input type="hidden" name="data" id="data" value="{'nis':2}">
                        <div id=output></div>
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
    <script src="<?= $domain;?>assets/js/qr.js"></script>
    <script>
        $(function() {
            var updatetimer = null, updatepending = false;
            var update = function() {
                if (updatetimer != null) {
                    //clearTimeout(updatetimer);
                    updatepending = true;
                } else {
                    var updatereal = function() {
                        try {
                            var options = {ecclevel: $('[name=ecclevel]:checked').val()};
                            var starttime, endtime;
                            if ($('#format').val() == 'png') {
                                starttime = +new Date();
                                var url = QRCode.generatePNG($('#data').val(), options);
                                endtime = +new Date();
                                $('#output').html('<img src="' + url + '">');
                            } else {
                                starttime = +new Date();
                                var table = QRCode.generateHTML($('#data').val(), options);
                                endtime = +new Date();
                                $('#output').empty().append(table);
                            }
                            $('#debug').text('Took ' + (endtime - starttime) + 'ms.');
                        } catch (e) {
                            $('#output').html('Error: ' + e);
                        }

                        if (updatepending) {
                            updatepending = false;
                            updatetimer = setTimeout(updatereal, 300);
                        } else {
                            updatetimer = null;
                        }
                    };
                    updatetimer = setTimeout(updatereal, 300);
                }
            };

            $('[name=data]').keypress(update);
            $('[name=data], [name=ecclevel], [name=format]').change(update);
            update();
        });
    </script>
  </body>
</html>