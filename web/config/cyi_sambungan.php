<?php
error_reporting(0);
date_default_timezone_set('UTC');
//Domain "http://localhost/"
$domain="http://localhost/absensi-karyawan/web/";
//Key API
$apiKey="5a0643580c864c3a9bb934529b055402";
//Database
$db = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'demo_absensiqrcode',
    'host' => 'localhost'
);
$connect = new mysqli($db['host'], $db['user'], $db['pass'], $db['db']);
if (!$connect) {
    die ("connection failed: " . mysqli_connect_error());
} else {
    $connect->set_charset('utf8');
}
include('cyi_sesi.php');
include('cyi_fungsi.php');
include('cyi_pengaturan.php');
?>