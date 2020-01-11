@section('content')
<div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Mobil</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="master-mobil" class="Frm">            
            @CSRF
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Mobil</label>
                            <input type="text" class="form-control" id="TxtNama" name="TxtNama" placeholder="Nama Mobil">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand Mobil</label>
                            <select class="form-control" name="TxtBrand" id="TxtBrand">   
                                <option value="">-- Pilih Brand --</option>
                                @foreach($data_brand as $row)
                                <option value="{{$row->id_brand}}">{{$row->nama_brand}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga Mobil</label>
                            <input type="text" class="form-control" id="TxtHarga" name="TxtHarga" placeholder="Harga Mobil">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Variant Mobil</label>
                            <input type="text" class="form-control" id="TxtVariant" name="TxtVariant" placeholder="Variant Mobil">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Lokasi</label>                            
                            <select class="form-control" id="TxtLokasi" name="TxtLokasi">
                                <option value="">-- Pilih Lokasi --</option>
                                <option value="jakarta">Jakarta</option>
                                <option value="surabaya">Surabaya</option>
                                <option value="banten">Banten</option>
                                <option value="bekasi">Bekasi</option>
                                <option value="depok">Depok</option>
                                <option value="semarang">Semarang</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Transmission</label>
                            <input type="text" class="form-control" id="TxtTransmisi" name="TxtTransmisi" placeholder="Transmisi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bahan Bakar</label>
                            <input type="text" class="form-control" id="TxtBahanBakar" name="TxtBahanBakar" placeholder="Bahan Bakar">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Length</label>
                            <input type="text" class="form-control" id="TxtLength" name="TxtLength" placeholder="Length">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Width</label>
                            <input type="text" class="form-control" id="TxtWidth" name="TxtWidth" placeholder="Width">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Height</label>
                            <input type="text" class="form-control" id="TxtHeight" name="TxtHeight" placeholder="Height">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Wheelbase</label>
                            <input type="text" class="form-control" id="TxtWheelbase" name="TxtWheelbase" placeholder="Wheelbase">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Front tread</label>
                            <input type="text" class="form-control" id="TxtFronttread" name="TxtFronttread" placeholder="Front tread">
                        </div>                         
                    </div>

                    <div class="col-md-6 col-sm-6">


                        <div class="form-group">
                            <label for="exampleInputEmail1">Rear tread</label>
                            <input type="text" class="form-control" id="TxtReartread" name="TxtReartread" placeholder="Rear tread">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Front suspension</label>
                            <input type="text" class="form-control" id="TxtFrontsuspension" name="TxtFrontsuspension" placeholder="Front suspension">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Rear suspension</label>
                            <input type="text" class="form-control" id="TxtRearsuspension" name="TxtRearsuspension" placeholder="Rear suspension">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Front brake</label>
                            <input type="text" class="form-control" id="TxtFrontbrake" name="TxtFrontbrake" placeholder="Front brake">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Rear brake</label>
                            <input type="text" class="form-control" id="TxtRearbrake" name="TxtRearbrake" placeholder="Rear brake">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Steering gear</label>
                            <input type="text" class="form-control" id="TxtSteeringgear" name="TxtSteeringgear" placeholder="Steering gear">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tires size</label>
                            <input type="text" class="form-control" id="TxtTiressize" name="TxtTiressize" placeholder="Tires size">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Serial no</label>
                            <input type="text" class="form-control" id="TxtSerialno" name="TxtSerialno" placeholder="Serial no">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Displacement</label>
                            <input type="text" class="form-control" id="TxtDisplacement" name="TxtDisplacement" placeholder="Displacement">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Bore x stroke</label>
                            <input type="text" class="form-control" id="TxtBorexstroke" name="TxtBorexstroke" placeholder="Bore x stroke">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Maximum output ps rpm</label>
                            <input type="text" class="form-control" id="TxtMaximumoutputpsrpm" name="TxtMaximumoutputpsrpm" placeholder="Maximum output ps rpm">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Maximum tourque kg rpm</label>
                            <input type="text" class="form-control" id="TxtMaximumtourquekgrpm" name="TxtMaximumtourquekgrpm" placeholder="Maximum tourque kg rpm">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Fuel system</label>
                            <input type="text" class="form-control" id="TxtFuelsystem" name="TxtFuelsystem" placeholder="Fuel system">
                        </div>                         
                    </div>

                </div>
                <div class="form-group append_image">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto[]" required="" multiple>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>                          
                    </div>
                    <input type="radio" name="warna_1" value="hitam"> hitam
                    <input type="radio" name="warna_1" value="abu-abu"> abu-abu
                    <input type="radio" name="warna_1" value="merah"> merah
                    <input type="radio" name="warna_1" value="putih"> putih
                </div>

                <button type='button' class='btn btn-warning add_image' data-no='1'>Add Image</button>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary tombol">Submit</button>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('.add_image').click(function () {
            var no = $(this).data('no') + 1;
            $(this).data('no', no);
            var html = `<div class="form-group  remove` + no + `">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto[]" required="" multiple>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>                 
                        <button type="button" class="btn btn-danger btn-hapus btn-sm" data-id="` + no + `">remove</button>
                    </div>
                                <input type="radio" name="warna_` + no + `" value="hitam"> hitam
                    <input type="radio" name="warna_` + no + `" value="abu-abu"> abu-abu
                    <input type="radio" name="warna_` + no + `" value="merah"> merah
                    <input type="radio" name="warna_` + no + `" value="putih"> putih
                </div>`;

            $('.append_image').append(html);
            bsCustomFileInput.init();
            if ($('.btn-hapus').length >= 4) {
                $('.add_image').prop('disabled', true);
            } else {
                $('.add_image').prop('disabled', false);
            }
        });

        $('.append_image').on('click', '.btn-hapus', function () {
            $('.remove' + $(this).data('id')).remove();
            if ($('.btn-hapus').length >= 4) {
                $('.add_image').prop('disabled', true);
            } else {
                $('.add_image').prop('disabled', false);
            }
        });
        bsCustomFileInput.init();
        $('.Frm').on("submit", function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                cache: false,
                dataType: 'json',
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $('.error').remove();
                    $('.tombol').text('loading..');
                    $('.tombol').prop('disabled', true);
                },
                success: function (response) {
                   
                    swal({title: response.msg.title, type: response.msg.type, text: response.msg.text, timer: 2000, showConfirmButton: false});
                    setTimeout(function () {
                        window.location = response.msg.link;
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

    });
</script>
@endsection