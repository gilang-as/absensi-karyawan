$( document ).ready(function() {

    var url = "http://localhost/absensi-karyawan/web/";
    var page = 1;
    var current_page = 1;
    var total_page = 0;
    var is_ajax_fire = 0;
    manageData();
    /* tampilkan data */
    function manageData() {
        $.ajax({
            dataType: 'json',
            url: url+'api.php?tipe=jupukbagian',
            data: {page:page}
        }).done(function(data){
            total_page = Math.ceil(data.total/10);
            current_page = page;
            $('#pagination').twbsPagination({
                totalPages: total_page,
                visiblePages: current_page,
                onPageClick: function (event, pageL) {
                    page = pageL;
                    if(is_ajax_fire != 0){
                      getPageData();
                    }
                }
            });
            manageRow(data.data);
            is_ajax_fire = 1;
        });
    
    }
    /* tampilkan  data */
    function getPageData() {
        $.ajax({
            dataType: 'json',
            url: url+'api.php?tipe=jupukbagian',
            data: {page:page}
        }).done(function(data){
            manageRow(data.data);
        });
    }
    /* tambahkan data baru pada table */
    function manageRow(data) {
        var	rows = '';
        $.each( data, function( key, value ) {
              rows = rows + '<tr>';
              rows = rows + '<td>'+value.id+'</td>';
              rows = rows + '<td>'+value.nama+'</td>';
              rows = rows + '<td data-id="'+value.id+'">';
            rows = rows + '<button data-toggle="modal" data-target="#ubahbagian" class="btn btn-primary btn-sm ubahbagian"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button> ';
            rows = rows + '<button class="btn btn-danger btn-sm hapusbagian"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Hapus</button>';
            rows = rows + '</td>';
              rows = rows + '</tr>';
        });
    
        $("tbody").html(rows);
    }
    /* tambah user */
    $(".crud-submit").click(function(e){
        e.preventDefault();
        var id = $("#tambahkaryawan").find("input[name='id']").val();
        var nama = $("#tambahkaryawan").find("input[name='nama']").val();
        var jekel = $("#tambahkaryawan").find("input[name='jekel']").val();
        var sandi = $("#tambahkaryawan").find("input[name='sandi']").val();
        var lv = $("#tambahkaryawan").find("input[name='lv']").val();
    
        if(id != '' && nama != '' && jekel != '' && sandi != '' && lv != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + 'api.php?tipe=tambahkaryawan',
                data:{id:id, nama:nama, jekel:jekel, sandi:sandi, lv:lv}
            }).done(function(data){
                $("#tambahkaryawan").find("input[name='id']").val('');
                $("#tambahkaryawan").find("input[name='nama']").val('');
                $("#tambahkaryawan").find("input[name='jekel']").val('');
                $("#tambahkaryawan").find("input[name='sandi']").val('');
                $("#tambahkaryawan").find("input[name='lv']").val('');
                getPageData();
                $(".modal").modal('hide');
            });
        }else{
            alert('Ada data yang kosong')
        }
    }); 
    /* hapus user */
    $("body").on("click",".hapusbagian",function(){
        var id = $(this).parent("td").data('id');
        var c_obj = $(this).parents("tr");
    
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + 'api.php?tipe=hapuskaryawan',
            data:{id:id}
        }).done(function(data){
            c_obj.remove();
            getPageData();
            alert('Data berhasil dihapus')
        });
    
    });   
    /* Edit user */
    $("body").on("click",".ubahbagian",function(){
    
        var id = $(this).parent("td").data('id');
        var nama = $(this).parent("td").prev("td").prev("td").prev("td").text();
        var jekel = $(this).parent("td").prev("td").prev("td").text();
        var lv = $(this).parent("td").prev("td").text();
        if(jekel=='Laki-laki'){
            var jekel=0;
        }else{
            var jekel=1;
        }
        if(lv=='Karyawan'){
            var lv=0;
        }else{
            var lv=1;
        }
        $("#ubahkaryawan").find("input[name='id']").val(id);
        $("#ubahkaryawan").find("input[name='nama']").val(nama);
        $("#ubahkaryawan").find("input[name='jekel']").val(jekel);
        $("#ubahkaryawan").find("input[name='sandi']").val(lv);
        $("#ubahkaryawan").find("input[name='lv']").val(lv);
    
    });
    /* Update user */
    $(".ubahbagian").click(function(e){
    
        e.preventDefault();
        var id = $("#tambahkaryawan").find("input[name='id']").val();
        var nama = $("#tambahkaryawan").find("input[name='nama']").val();
        var jekel = $("#tambahkaryawan").find("input[name='jekel']").val();
        var sandi = $("#tambahkaryawan").find("input[name='sandi']").val();
        var lv = $("#tambahkaryawan").find("input[name='lv']").val();
    
        if(id != '' && nama != '' && jekel != '' && sandi != '' && lv != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + 'api.php?tipe=ubahkaryawan',
                data:{id:id, nama:nama, jekel:jekel, sandi:sandi, lv:lv}
            }).done(function(data){
                getPageData();
                $(".modal").modal('hide');
                alert('Data berhasil diubah')
            });
        }else{
            alert('Ada data yang kosong')
        }
    
    });
    });