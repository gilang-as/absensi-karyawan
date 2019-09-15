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
            url: url+'api.php?tipe=jupukkaryawan',
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
            url: url+'api.php?tipe=jupukkaryawan',
            data: {page:page}
        }).done(function(data){
            manageRow(data.data);
        });
    }
    /* tambahkan data baru pada table */
    function manageRow(data) {
        var	rows = '';
        $.each( data, function( key, value ) {
            if(value.jekel==0){
                var jekel='Laki-laki';
            }else{
                var jekel='Perempuan';
            }
            if(value.lv==0){
                var lv='Karyawan';
            }else{
                var lv='Admin';
            }
              rows = rows + '<tr>';
              rows = rows + '<td>'+value.id+'</td>';
              rows = rows + '<td>'+value.nama+'</td>';
              rows = rows + '<td>'+jekel+'</td>';
                rows = rows + '<td>'+lv+'</td>';
                rows = rows + '<td style="display: none;">'+value.sandi+'</td>';
              rows = rows + '<td data-id="'+value.id+'">';
            rows = rows + '<button data-toggle="modal" data-target="#ubahkaryawan" class="btn btn-primary btn-sm ubahkaryawan"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button> ';
            rows = rows + '<button class="btn btn-danger btn-sm hapuskaryawan"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Hapus</button>';
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
    $("body").on("click",".hapuskaryawan",function(){
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
    $("body").on("click",".ubahkaryawan",function(){
    
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
    $(".ubahkaryawan").click(function(e){
    
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