<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Cyine ID">
    <title>Dashboard - <?= $cyi["nama_app"] ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/vendors/prism/prism.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/vendors/chartist/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/css/app.css">
</head>

<body data-col="2-columns" class=" 2-columns ">
    <div class="wrapper">
        <?php include("template/include/cyi_header-tmp.php");?>
        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <!--Statistics cards Starts-->
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body text-left">
                                                    <h4 class="font-medium-5 card-title mb-0">$2310</h4>
                                                    <span>Analysts Payable</span>
                                                </div>
                                                <div class="media-right text-right">
                                                    <i class="icon-briefcase font-large-1 red"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="widget-line-area" class="height-150 WidgetAreaChart WidgetAreaChart1 WidgetAreaChartshadow mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body text-left">
                                                    <h4 class="font-medium-5 card-title mb-0">$2543</h4>
                                                    <span>Equipment Cost</span>
                                                </div>
                                                <div class="media-right text-right">
                                                    <i class="icon-anchor font-large-1 purple"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="widget-line-area2" class="height-150 WidgetAreaChart WidgetAreaChart2 WidgetAreaChartshadow mb-2">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <div class="card-block pt-2 pb-0">
                                            <div class="media">
                                                <div class="media-body text-left">
                                                    <h4 class="font-medium-5 card-title mb-0">$5686</h4>
                                                    <span>Analytics Output</span>
                                                </div>
                                                <div class="media-right text-right">
                                                    <i class="icon-share-alt font-large-1 blue"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="widget-line-area3" class="height-150 WidgetAreaChart WidgetAreaChart3 WidgetAreaChartshadow mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("template/include/cyi_footer-tmp.php");?>
        </div>
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
    <script src="<?= $domain;?>assets/vendors/chartist/chartist.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="<?= $domain;?>assets/js/app-sidebar.js"></script>
    <script src="<?= $domain;?>assets/js/notification-sidebar.js"></script>
    <script src="<?= $domain;?>assets/js/dashboard-analytics.js"></script>
    <script src="<?= $domain;?>assets/js/customizer.js"></script>
</body>

</html>