@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>list of submitted products</h1>
                </div>                
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">                            
                            <a href="{{url('add-mobil')}}" class="btn btn-block btn-primary btn-md">add</a>
                        </h3>
                    </div>            
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kendaraan</th>                                                                                                          
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_mobil as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->nama_mobil}}</td>                                                    
                                    <td><a href="/detail/{{$row->id_kendaraan}}" class="btn btn-success">Detail</a></td>
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
@endsection