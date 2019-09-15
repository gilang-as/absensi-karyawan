<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Karyawan - <?= $cyi["nama_app"] ?></title>
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
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/vendors/datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $domain;?>assets/css/app.css">
</head>

<body data-col="2-columns" class=" 2-columns ">
    <div class="wrapper">
        <?php include("template/include/cyi_header-tmp.php");?>
        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <section id="dom">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title-wrap bar-success">
                                                <h4 class="card-title">Karyawan</h4>
                                            </div>
                                        </div>
                                        <div class="card-body collapse show">
                                            <div class="card-block card-dashboard">
                                                <button type="button" class="btn btn-outline-success btn-block btn-lg" data-toggle="modal" data-target="#tambahkaryawan">
                                                    Tambah Karyawan
                                                </button>
                                                <table class="table table-striped table-bordered dom-jQuery-events">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nama</th>
                                                            <th>Jenis Kelamin</th>
                                                            <th>Level</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                                <ul id="pagination" class="pagination justify-content-center"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tambah -->
                            <div class="modal fade text-left" id="tambahkaryawan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel17">Tambah Karyawan</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form data-toggle="validator" method="POST">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="control-label" for="id">ID</label>
                                                    <input type="text" name="id" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="nama">Nama</label>
                                                    <input type="text" name="nama" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="jekel">Jenis Kelamin</label>
                                                    <select name="jekel" class="form-control" required>
                                                        <option value="0">Laki-laki</option>
                                                        <option value="1">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="sandi">Sandi</label>
                                                    <input type="text" name="sandi" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="lv">Status</label>
                                                    <select name="lv" class="form-control" required>
                                                        <option value="0">Admin</option>
                                                        <option value="1">Karyawan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn crud-submit btn-success">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Edit -->
                            <div class="modal fade text-left" id="ubahkaryawan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel17">Basic Modal</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form data-toggle="validator" method="put">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="control-label" for="id">ID</label>
                                                    <input type="text" name="id" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="nama">Nama</label>
                                                    <input type="text" name="nama" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="jekel">Jenis Kelamin</label>
                                                    <select name="jekel" class="form-control" required>
                                                        <option value="0">Laki-laki</option>
                                                        <option value="1">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="sandi">Sandi</label>
                                                    <input type="text" name="sandi" class="form-control" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="lv">Status</label>
                                                    <select name="lv" class="form-control" required>
                                                        <option value="0">Admin</option>
                                                        <option value="1">Karyawan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Keluar</button>
                                                <button type="button" class="btn btn-outline-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <?php include("template/include/cyi_footer-tmp.php");?>
        </div>
    </div>
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
        <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
            <h4 class="mb-0 text-bold-400">Theme Customizer</h4>
            <p>Customize &amp; Preview in Real Time</p>
            <hr>
            <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Background Image</h6>
            <div class="cz-bg-image row">
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/01.jpg" width="50" height="100" alt="Bg image1" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/02.jpg" width="50" height="100" alt="Bg image2" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/03.jpg" width="50" height="100" alt="Bg image3" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/04.jpg" width="50" height="100" alt="Bg image4" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/05.jpg" width="50" height="100" alt="Bg image5" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/06.jpg" width="50" height="100" alt="Bg image6" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/07.jpg" width="50" height="100" alt="Bg image7" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/08.jpg" width="50" height="100" alt="Bg image8" class="rounded box-shadow-2"></div>
            </div>
            <hr>
            <div class="togglebutton">
                <div class="switch"><span class="text-bold-400">Show / Hide Sidebar Bg Image</span>
                    <div class="float-right">
                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input id="sidebar-bg-img" type="checkbox" checked="" class="custom-control-input cz-bg-image-display">
                            <label for="sidebar-bg-img" class="custom-control-label"></label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Color Options</h6>
            <div class="cz-bg-color">
                <div class="row p-1">
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="aqua-marine" class="gradient-aqua-marine d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="sublime-vivid" class="gradient-sublime-vivid d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="crystal-clear" class="gradient-crystal-clear d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="timber" class="gradient-timber d-block rounded box-shadow-2"></span></div>
                </div>
                <div class="row p-1">
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="black" class="bg-black d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="white" class="bg-white d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="primary" class="bg-primary d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="danger" class="bg-danger d-block rounded box-shadow-2"></span></div>
                </div>
            </div>
            <hr>
            <div class="togglebutton">
                <div class="switch"><span class="text-bold-400">Compact Menu</span>
                    <div class="float-right">
                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
                            <label for="cz-compact-menu" class="custom-control-label"></label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <label for="cz-sidebar-width" class="text-bold-400">Sidebar Width</label>
                <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
                    <option value="small">Small</option>
                    <option value="medium" selected="">Medium</option>
                    <option value="large">Large</option>
                </select>
            </div>
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
    <script src="<?= $domain;?>assets/vendors/datatables/datatables.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/datatables/buttons.flash.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/datatables/jszip.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/datatables/pdfmake.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/datatables/vfs_fonts.js"></script>
    <script src="<?= $domain;?>assets/vendors/datatables/buttons.html5.min.js"></script>
    <script src="<?= $domain;?>assets/vendors/datatables/buttons.print.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="<?= $domain;?>assets/js/app-sidebar.js"></script>
    <script src="<?= $domain;?>assets/js/notification-sidebar.js"></script>
    <script src="<?= $domain;?>assets/js/customizer.js"></script>
    <script src="<?= $domain;?>assets/js/components-modal.min.js"></script>
    <script src="<?= $domain;?>assets/js/cyi_karyawan.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
</body>

</html>