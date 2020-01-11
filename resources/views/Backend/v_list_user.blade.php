@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
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
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Kontak</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_user as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->user_nama_lengkap}}</td>
                                    <td>{{$row->user_email}}</td>
                                    <td>{{$row->user_kontak}}</td>
                                    <td><button class="btn btn-success">Ubah</button> <button class="btn btn-danger">hapus</button></td>
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
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="TxtNama" id="TxtNama" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="TxtEmail" id="TxtEmail" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kontak</label>
                    <input type="no_hp" name="TxtHp" id="TxtHp" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="TxtAlamat" id="TxtAlamat"></textarea>
                </div>
                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="TxtPhoto" id="TxtPhoto">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script type="text/javascript">
    $(function () {
        $('.btn-add').click(function () {
            $('#modal-default').modal('show');
        });
    });
</script>
@endsection