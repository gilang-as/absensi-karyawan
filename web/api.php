<?php
header('Content-type:application/json');
require 'config/cyi_sambungan.php';
if($_GET['tipe']=='jupukkaryawan'){
    $num_rec = 10;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    };
    $start_from = ($page - 1) * $num_rec;
    $sqlTotal = "SELECT * FROM cyi_karyawan";
    $sql = "SELECT * FROM cyi_karyawan Order By id desc LIMIT $start_from, $num_rec";
    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()) {
        $json[] = $row;
    }
    $data['data'] = $json;
    $result = mysqli_query($connect, $sqlTotal);
    $data['total'] = mysqli_num_rows($result);
    echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($_GET['tipe']=='tambahkaryawan'){
    $sql = "INSERT INTO cyi_karyawan (id,nama,jekel,sandi,lv) VALUES ('" . $_POST['id'] . "','" . $_POST['nama'] . "','" . $_POST['jekel'] . "','" . $_POST['sandi'] . "','" . $_POST['lv'] . "')";
    $result = $connect->query($sql);
    $sql = "SELECT * FROM cyi_karyawan Order by id desc LIMIT 1";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($_GET['tipe']=='ubahkaryawan'){
    $sql = "UPDATE cyi_karyawan SET id = '" . $_POST['id'] . "',nama = '" . $_POST['nama'] . "',jekel = '" . $_POST['jekel'] . "',sandi = '" . $_POST['sandi'] . "',lv = '" . $_POST['lv'] . "' WHERE id = '" . $_POST['id'] . "'";
    $result = $connect->query($sql);
    $sql = "SELECT * FROM cyi_karyawan WHERE id = '" . $_POST['id'] . "'";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($_GET['tipe']=='hapuskaryawan'){
    $sql = "DELETE FROM cyi_karyawan WHERE id = '" . $_POST['id'] . "'";
    $result = $connect->query($sql);
    echo json_encode([$_POST['id']], JSON_PRETTY_PRINT);

}elseif($_GET['tipe']=='jupukwaktu'){
    $num_rec = 10;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    };
    $start_from = ($page - 1) * $num_rec;
    $sqlTotal = "SELECT * FROM cyi_waktu";
    $sql = "SELECT * FROM cyi_waktu Order By id desc LIMIT $start_from, $num_rec";
    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()) {
        $json[] = $row;
    }
    $data['data'] = $json;
    $result = mysqli_query($connect, $sqlTotal);
    $data['total'] = mysqli_num_rows($result);
    echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($_GET['tipe']=='tambahwaktu'){
    $sql = "INSERT INTO cyi_waktu (waktu_mulai,waktu_selesai,keterangan,bagian) VALUES ('" . $_POST['waktumulai'] . "','" . $_POST['waktuselesai'] . "','" . $_POST['keterangan'] . "','" . $_POST['bagian'] . "')";
    $result = $connect->query($sql);
    $sql = "SELECT * FROM cyi_waktu Order by id desc LIMIT 1";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($_GET['tipe']=='ubahwaktu'){
    $sql = "UPDATE cyi_karyawan SET id = '" . $_POST['id'] . "',nama = '" . $_POST['nama'] . "',jekel = '" . $_POST['jekel'] . "',sandi = '" . $_POST['sandi'] . "',lv = '" . $_POST['lv'] . "' WHERE id = '" . $_POST['id'] . "'";
    $result = $connect->query($sql);
    $sql = "SELECT * FROM cyi_karyawan WHERE id = '" . $_POST['id'] . "'";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($_GET['tipe']=='hapuswaktu'){
    $sql = "DELETE FROM cyi_waktu WHERE id = '" . $_POST['id'] . "'";
    $result = $connect->query($sql);
    echo json_encode([$_POST['id']], JSON_PRETTY_PRINT);
}else{
    echo'Gagal';
}
?>