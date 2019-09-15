<?php
require_once("config/cyi_sambungan.php");
if($_GET["halaman"]=="masuk"){
    include("template/cyi_mlebu-tmp.php");
}elseif($_GET["halaman"]=="dashboard"){
    include("template/cyi_dashboard-tmp.php");
}elseif($_GET["halaman"]=="karyawan"){
    include("template/cyi_karyawan-tmp.php");
}elseif($_GET["halaman"]=="waktu"){
    include("template/cyi_waktu-tmp.php");
}elseif($_GET["halaman"]=="bagian"){
    include("template/cyi_bagian-tmp.php");
}else{
    header('location: '.$domain.'dashboard');
}
?>