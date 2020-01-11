@section('content')
<div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail - {{$data_mobil->nama_mobil. ' [Rp. '.$data_mobil->harga_mobil.']'}}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $no = 0;
                            foreach ($image_mobil as $value) {
                                ?>
                                <li data-target = "#carouselExampleIndicators" data-slide-to = "<?php echo $no; ?>" class="<?php echo $no == 0 ? 'active' : ''; ?>"></li>
                                <?php
                                $no++;
                            }
                            ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php
                            $no = 0;
                            foreach ($image_mobil as $values) {
                                ?>                             
                                <div class="carousel-item <?php echo $no == 0 ? 'active' : ''; ?>">
                                    <img class="d-block w-100" src="{{asset('assets/kendaraan').'/'.$values->image}}" alt="First slide">
                                </div>     
                                <?php
                                $no++;
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="komentar" id="komentar" placeholder="Komentar..."></textarea>                        
                    </div>
                    <button class="btn btn-success btn-komentar" type="button">Submit</button>
                    <hr>
                    <div class="show"></div>
                </div>
                <div class="col-md-6">

                    <table class="table">
                        <tr>
                            <th colspan="2" style="background: black;color: white;">Dimension</th>                                                       
                        </tr>
                        <tr>
                            <td><b>Length </b></td>
                            <td>{{$data_mobil->length}}</td>                            
                        </tr>
                        <tr>
                            <td><b>Width </b></td>
                            <td>{{$data_mobil->width}}</td>
                        </tr>
                        <tr>
                            <td><b>Height </b></td>
                            <td>{{$data_mobil->height}}</td>
                        </tr>
                        <tr>
                            <td><b>Wheelbase </b></td>
                            <td>{{$data_mobil->wheelbase}}</td>
                        </tr>
                        <tr>
                            <td><b>Front tread </b></td>
                            <td>{{$data_mobil->fronttread}}</td>
                        </tr>
                        <tr>
                            <td><b>Rear tread </b></td>
                            <td>{{$data_mobil->reartread}}</td>
                        </tr> 
                        <tr>
                            <th colspan="2" style="background: black;color: white;">Chassis</th>                                                       
                        </tr>
                        <tr>
                            <td><b>Transmission </b></td>
                            <td>{{$data_mobil->transmission}}</td>
                        </tr>
                        <tr>
                            <td><b>Front suspension </b></td>
                            <td>{{$data_mobil->frontsuspension}}</td>
                        </tr>
                        <tr>
                            <td><b>Rear suspension </b></td>
                            <td>{{$data_mobil->rearsuspension}}</td>
                        </tr>
                        <tr>
                            <td><b>Front brake </b></td>
                            <td>{{$data_mobil->frontbrake}}</td>
                        </tr>
                        <tr>
                            <td><b>Rear brake </b></td>
                            <td>{{$data_mobil->rearbrake}}</td>
                        </tr>
                        <tr>
                            <td><b>Steering gear </b></td>
                            <td>{{$data_mobil->steeringgear}}</td>
                        </tr>
                        <tr>
                            <td><b>Tires size </b></td>
                            <td>{{$data_mobil->tiressize}}</td>
                        </tr>
                        <tr>
                            <th colspan="2" style="background: black;color: white;">Engine</th>                                                       
                        </tr>
                        <tr>
                            <td><b>Serial no </b></td>
                            <td>{{$data_mobil->serialno}}</td>
                        </tr>                        
                        <tr>
                            <td><b>Displacement </b></td>
                            <td>{{$data_mobil->displacement}}</td>
                        </tr>
                        <tr>
                            <td><b>Bore x stroke </b></td>
                            <td>{{$data_mobil->borexstroke}}</td>
                        </tr>
                        <tr>
                            <td><b>Maximum output ps rpm </b></td>
                            <td>{{$data_mobil->maximumoutputpsrpm}}</td>
                        </tr>
                        <tr>
                            <td><b>Maximum tourque kg rpm </b></td>
                            <td>{{$data_mobil->maximumtourquekgrpm}}</td>
                        </tr>
                        <tr>
                            <td><b>Fuel system </b></td>
                            <td>{{$data_mobil->fuelsystem}}</td>
                        </tr>
                    </table>
                    <a href="{{url('master-mobil')}}" class="btn btn-danger">kembali</a>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        list_komentar();
        $('.btn-komentar').click(function () {
            $.post('{{url("add-komentar")}}', {komentar: $('#komentar').val(), id_kendaraan: '{{$data_mobil->id_kendaraan}}', "_token": "{{ csrf_token() }}"}, function (data) {
                list_komentar();
                $('#komentar').val('');
            });
        });


    });
    function list_komentar() {
        $.post('{{url("list-komentar")}}', {id_kendaraan: '{{$data_mobil->id_kendaraan}}', "_token": "{{ csrf_token() }}"}, function (data) {
            var html = '';
            $.each(JSON.parse(data), function (index, datass) {
                html += '<p>' + datass.komentar + '</p><button class="btn btn-sm btn-primary btn-upvotes" type="button" data-id="' + datass.id_kometar + '" data-total="' + datass.total_upvote + '">upvotes <span class="badge">' + datass.total_upvote + '</span></button> <button class="btn btn-sm btn-danger btn-downvotes" type="button" data-id="' + datass.id_kometar + '" data-total="' + datass.total_downvote + '">downvotes <span class="badge">' + datass.total_downvote + '</span></button><hr>';
            });
            $('.show').html(html);
            $('.btn-upvotes').click(function () {                
                $.post('{{url("add-upvotes")}}', {id_komentar: $(this).data('id'),total: $(this).data('total'), "_token": "{{ csrf_token() }}"}, function (data) {                    
                    list_komentar();
                    $('#komentar').val('');
                });
            });

            $('.btn-downvotes').click(function () {                
                $.post('{{url("add-downvotes")}}', {id_komentar: $(this).data('id'),total: $(this).data('total'), "_token": "{{ csrf_token() }}"}, function (data) {
                    list_komentar();
                    $('#komentar').val('');
                });
            });
        });
    }
</script>
@endsection