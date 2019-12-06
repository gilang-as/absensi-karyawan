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
    $sql = "INSERT INTO cyi_karyawan (id,nama,jekel,sandi,lv,bagian) VALUES ('" . $_POST['id'] . "','" . $_POST['nama'] . "','" . $_POST['jekel'] . "','" . $_POST['sandi'] . "','" . $_POST['lv'] . "','" . $_POST['bagian'] . "')";
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
}elseif($_GET['tipe']=='jupukbagian'){
    $num_rec = 10;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    };
    $start_from = ($page - 1) * $num_rec;
    $sqlTotal = "SELECT * FROM cyi_bagian";
    $sql = "SELECT * FROM cyi_bagian Order By id desc LIMIT $start_from, $num_rec";
    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()) {
        $json[] = $row;
    }
    $data['data'] = $json;
    $result = mysqli_query($connect, $sqlTotal);
    $data['total'] = mysqli_num_rows($result);
    echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($_GET['tipe']=='tambahbagian'){
    $sql = "INSERT INTO cyi_bagian (nama) VALUES ('" . $_POST['nama'] . "')";
    $result = $connect->query($sql);
    $sql = "SELECT * FROM cyi_bagian Order by id desc LIMIT 1";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($_GET['tipe']=='ubahbagian'){
    $sql = "UPDATE cyi_bagian SET ,nama = '" . $_POST['nama'] . "' WHERE id = '" . $_POST['id'] . "'";
    $result = $connect->query($sql);
    $sql = "SELECT * FROM cyi_bagian WHERE id = '" . $_POST['id'] . "'";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    echo json_encode($data, JSON_PRETTY_PRINT);
}elseif($_GET['tipe']=='hapusbagian'){
    $sql = "DELETE FROM cyi_bagian WHERE id = '" . $_POST['id'] . "'";
    $result = $connect->query($sql);
    echo json_encode([$_POST['id']], JSON_PRETTY_PRINT);
}elseif($_GET['tipe']=='mlebu'){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if($_POST['nis']==1 && $_POST['pass']==1){
            echo '{"status":"true","pesan":"Login Berhasil","nis":"1010","nama":"Gilang"}';
        }else{
            echo '{"status":"false","pesan":"Maaf, Username atau Kata Sandi Anda salah","nis":null,"nama":null}';
        }
    }else{
        echo $error;
    }
}elseif($_GET['tipe']=='absen'){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if($_POST['name']=="Nama" || $_POST['nis']=="NIS"){
            echo 'Data mohon disi terlebih dahulu.';
        }else{
            $data=array(
                "id_presensi"=>$_POST["id_presensi"],
                "nis"=>$_POST["nis"]
            );

            print_r($data);
        }
    }else{
        echo $error;
    }
}elseif($_GET['tipe']=='daftarbagian'){
    $sql = "SELECT * FROM cyi_bagian WHERE nama LIKE '%".$_GET['search']."%' ORDER BY nama ASC";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        $list = array();
        $key=0;
        while($row = $result->fetch_assoc()) {
            $list[$key]['id'] = $row['id'];
            $list[$key]['text'] = $row['nama']; 
        $key++;
        }
        echo json_encode($list, JSON_PRETTY_PRINT);
    } else {
        echo "hasil kosong";
    }
}else{
    echo'Gagal';
}
?>