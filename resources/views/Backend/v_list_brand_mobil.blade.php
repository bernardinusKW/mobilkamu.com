@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Master Brand Mobil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Master Brand Mobil</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><button type="button" class="btn btn-block btn-primary btn-md btn-add"> Add</button></h3>
                    </div>            
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Brand</th>                                    
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->nama_brand}}</td>                                   
                                    <td><button class="btn btn-success btn-update" data-id="{{$row->id_brand}}">Ubah</button> <button class="btn btn-danger btn-delete" data-id="{{$row->id_brand}}" data-nama="{{$row->nama_brand}}">hapus</button></td>
                                </tr>
                                @endforeach
                            </tbody>               
                        </table>
                    </div>            
                </div>          
            </div>        
        </div>      
    </section>    
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="master-brand" class="Frm"> 
                @CSRF
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Brand</label>
                        <input type="text" name="TxtNamaBrand" id="TxtNamaBrand" class="form-control" placeholder="Nama Brand">
                    </div> 
                    <div class="form-group">
                        <label>Deskripsi Brand</label>                    
                        <textarea class="form-control" id="TxtDeskripsiBrand" name="TxtDeskripsiBrand" placeholder="Deskripsi Brand"></textarea>
                    </div>  
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" name="id_brand" id="id_brand">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                    
                    <button class="btn btn-success tombol" type="submit" id="btn_simpan"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script type="text/javascript">
    $(function () {
        $('.btn-add').click(function () {
            $('#TxtNamaBrand,#TxtDeskripsiBrand,#id_brand').val('');           
            $('.modal-title').text('Add Brand');
            $('#modal-default').modal('show');
        });

        $('.btn-update').click(function () {
            $.post('{{url("get-brand")}}', {id: $(this).data('id'), "_token": "{{ csrf_token() }}"}, function (data) {
                var obj = JSON.parse(data);
                $('#TxtNamaBrand').val(obj.nama_brand);
                $('#TxtDeskripsiBrand').val(obj.deskripsi_brand);
                $('#id_brand').val(obj.id_brand);
            });
            $('.modal-title').text('Update Brand');
            $('#modal-default').modal('show');
        });

        $('.Frm').on("submit", function (e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $('.Frm').serialize(),
                cache: false,
                dataType: 'json',
                beforeSend: function () {
                    $('.error').remove();
                    $('.tombol').text('loading..');
                    $('.tombol').prop('disabled', true);
                },
                success: function (response) {
                    swal({title: response.msg.title, type: response.msg.type, text: response.msg.text, timer: 2000, showConfirmButton: false});
                    setTimeout(function () {
                        window.location = '{{url("master-brand")}}';
                    }, 2000);
                },
                error: function (data) {
                    var errors = data.responseJSON;
                    console.log(errors);
                    if ($.isEmptyObject(errors) == false) {
                        $.each(errors.errors, function (key, value) {
                            $("#" + key).addClass('is-invalid');
                            $("#" + key).after(value);
                            $('.error').css("color", "#dc3545");
                        })
                    }
                    $('.tombol').text('Simpan');
                    $('.tombol').prop('disabled', false);
                }
            });
        });

        $('.btn-delete').click(function () {
            var nama = $(this).data('nama');
            var id = $(this).data('id');
            swal({
                title: "Apakah Anda Yakin ?",
                text: "Ingin Menghapus Data " + nama,
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yakin',
                cancelButtonText: "Tidak",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: '{{url("delete-brand")}}',
                        type: 'POST',
                        dataType: 'JSON',
                        data: {
                            'id': id, '_token': '{{ csrf_token() }}'
                        },
                        success: function (result) {
                            swal("Berhasil!", "Data " + nama + " Berhasil dihapus", "success");
                            setTimeout(function () {
                                window.location = '{{url("master-brand")}}';
                            }, 2000);
                        }
                    });
                } else {
                    swal("Batal", nama + " Batal dihapus", "error");
                }
            });
        });
    });
</script>
@endsection