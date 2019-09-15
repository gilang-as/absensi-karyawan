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
            url: url+'api.php?tipe=jupukwaktu',
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
            url: url+'api.php?tipe=jupukwaktu',
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
              rows = rows + '<td>'+value.keterangan+'</td>';
              rows = rows + '<td>'+value.bagian+'</td>';
              rows = rows + '<td>'+value.waktu_mulai+'</td>';
              rows = rows + '<td>'+value.waktu_selesai+'</td>';
              rows = rows + '<td data-id="'+value.id+'">';
            rows = rows + '<button data-toggle="modal" data-target="#ubahwaktu" class="btn btn-primary btn-sm ubahwaktu"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button> ';
            rows = rows + '<button class="btn btn-danger btn-sm hapuswaktu"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Hapus</button>';
            rows = rows + '</td>';
              rows = rows + '</tr>';
        });
    
        $("tbody").html(rows);
    }
    /* tambah user */
    $(".crud-submit").click(function(e){
        e.preventDefault();
        var waktumulai = $("#tambahwaktu").find("input[name='waktumulai']").val();
        var waktuselesai = $("#tambahwaktu").find("input[name='waktuselesai']").val();
        var keterangan = $("#tambahwaktu").find("input[name='keterangan']").val();
        var bagian = $("#tambahwaktu").find("select[name='bagian']").val();
    
        if(waktumulai != '' && waktuselesai != '' && keterangan != '' && bagian != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + 'api.php?tipe=tambahwaktu',
                data:{waktumulai:waktumulai, waktuselesai:waktuselesai, keterangan:keterangan, bagian:bagian}
            }).done(function(data){
                $("#tambahwaktu").find("input[name='waktumulai']").val('');
                $("#tambahwaktu").find("input[name='waktuselesai']").val('');
                $("#tambahwaktu").find("input[name='keterangan']").val('');
                $("#tambahwaktu").find("input[name='bagian']").val('');
                getPageData();
                $(".modal").modal('hide');
            });
        }else{
            alert('Ada data yang kosong')
        }
    }); 
    /* hapus user */
    $("body").on("click",".hapuswaktu",function(){
        var id = $(this).parent("td").data('id');
        var c_obj = $(this).parents("tr");
    
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + 'api.php?tipe=hapuswaktu',
            data:{id:id}
        }).done(function(data){
            c_obj.remove();
            getPageData();
            alert('Data berhasil dihapus')
        });
    
    });   
    /* Edit user */
    $("body").on("click",".ubahwaktu",function(){
    
        var id = $(this).parent("td").data('id');
        var keterangan = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
        var bagian = $(this).parent("td").prev("td").prev("td").prev("td").text();
        var waktumulai = $(this).parent("td").prev("td").prev("td").text();
        var waktuselesai = $(this).parent("td").prev("td").text();

        $("#ubahwaktu").find("input[name='waktumulai']").val(waktumulai);
        $("#ubahwaktu").find("input[name='waktuselesai']").val(waktuselesai);
        $("#ubahwaktu").find("input[name='keterangan']").val(keterangan);
        $("#ubahwaktu").find("select[name='bagian']").val(bagian);
    
    });
    /* Update user */
    $(".ubahwaktu").click(function(e){
    
        e.preventDefault();
        var waktumulai = $("#ubahwaktu").find("input[name='waktumulai']").val();
        var waktuselesai = $("#ubahwaktu").find("input[name='waktuselesai']").val();
        var keterangan = $("#ubahwaktu").find("input[name='keterangan']").val();
        var bagian = $("#ubahwaktu").find("select[name='bagian']").val();
    
        if(waktumulai != '' && waktuselesai != '' && keterangan != '' && bagian != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + 'api.php?tipe=ubahwaktu',
                data:{waktumulai:waktumulai, waktuselesai:waktuselesai, keterangan:keterangan, bagian:bagian}
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