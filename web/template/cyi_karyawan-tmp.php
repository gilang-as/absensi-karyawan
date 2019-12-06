<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Cyine ID">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
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
                                                    <label class="control-label" for="bagian">Bagian</label>
                                                    <select name="bagian" id="bagian" class="form-control select2" required>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Manager</option>
                                                        <option value="3">Karyawan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="lv">Status</label>
                                                    <select name="lv" class="form-control" required>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Manager</option>
                                                        <option value="3">Karyawan</option>
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
                                                        <option value="1">Admin</option>
                                                        <option value="2">Manager</option>
                                                        <option value="3">Karyawan</option>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2({
                ajax: {
                    url: 'https://api.github.com/orgs/select2/repos',
                    data: function(params) {
                        var query = {
                            search: params.term,
                            type: 'public'
                        }

                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    }
                }
            });
        });
    </script>
</body>

</html>