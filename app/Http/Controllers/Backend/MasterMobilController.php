<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterMobilController extends Controller {

    public function index() {
        $item = ['data_mobil' => DB::table('tbl_kendaraan')->where('status_kendaraan', 1)->orderBy('id_kendaraan', 'desc')->get()];
        $data = [
            'content' => view('backend.v_list_mobil', $item),
            'title' => 'Dashboard'
        ];
        return view('backend.main', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $item = ['data_brand' => DB::table('tbl_brand')->where('status_brand', 1)->orderBy('id_brand', 'desc')->get()];
        $data = [
            'content' => view('backend.v_form_mobil', $item),
            'title' => 'Dashboard'
        ];
        return view('backend.main', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $name = [];
        $label = [];
        foreach ($_POST as $key => $value) {
            $name[$key] = 'required';
            $label[$key . '.required'] = '<label class="error salah">Data Harus diisi</label>';
        }
        request()->validate($name, $label);

        $data = [
            'id_brands' => $request->input('TxtBrand'),
            'nama_mobil' => $request->input('TxtNama'),
            'harga_mobil' => $request->input('TxtHarga'),
            'variant_mobil' => $request->input('TxtVariant'),
            'lokasi' => $request->input('TxtLokasi'),
            'transmission' => $request->input('TxtTransmisi'),
            'bahan_bakar' => $request->input('TxtBahanBakar'),
            'length' => $request->input('TxtLength'),
            'width' => $request->input('TxtWidth'),
            'height' => $request->input('TxtHeight'),
            'wheelbase' => $request->input('TxtWheelbase'),
            'fronttread' => $request->input('TxtFronttread'),
            'reartread' => $request->input('TxtReartread'),
            'frontsuspension' => $request->input('TxtFrontsuspension'),
            'rearsuspension' => $request->input('TxtRearsuspension'),
            'frontbrake' => $request->input('TxtFrontbrake'),
            'rearbrake' => $request->input('TxtRearbrake'),
            'steeringgear' => $request->input('TxtSteeringgear'),
            'tiressize' => $request->input('TxtTiressize'),
            'serialno' => $request->input('TxtSerialno'),
            'displacement' => $request->input('TxtDisplacement'),
            'borexstroke' => $request->input('TxtBorexstroke'),
            'maximumoutputpsrpm' => $request->input('TxtMaximumoutputpsrpm'),
            'maximumtourquekgrpm' => $request->input('TxtMaximumtourquekgrpm'),
            'fuelsystem' => $request->input('TxtFuelsystem'),
            'status_kendaraan' => 1,
            'created_at' => date('Y-m-d h:i:s')
        ];
        $last_id = DB::table('tbl_kendaraan')->insertGetId($data);

        if ($request->hasfile('foto')) {
            $no = 1;
            foreach ($request->file('foto') as $file) {
                $filename = date('Y-m-dH-i-s').uniqid();
                $file->move(public_path() . '/assets/kendaraan/', $filename);
                $insert[] = [
                    'image' => $filename,
                    'warna' => $request->input('warna_' . $no++),
                    'id_kendaraan' => $last_id,
                    'created_at' => date('Y-m-d h:i:s')
                ];
            }
            DB::table('tbl_related_image')->insert($insert);
        }

        echo json_encode(array('success' => true, 'msg' => array(
                'title' => 'Success',
                'type' => 'success',
                'text' => 'Data Berhasil ditambahkan',
                'link' => url("detail") .'/'. $last_id
        )));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $item = [
            'data_mobil' => DB::table('tbl_kendaraan')->where('id_kendaraan', $id)->first(),
            'image_mobil' => DB::table('tbl_related_image')->where('id_kendaraan', $id)->get()
        ];
//        dd($item['data_mobil']->length);
        $data = [
            'content' => view('backend.v_detail_kendaraan', $item),
            'title' => 'Detail Kendaraan'
        ];
        return view('backend.main', $data);
    }

    public function list_komentar(Request $request) {
        echo json_encode(DB::table('tbl_komentar')->where('id_kendaraan', $request->input('id_kendaraan'))->orderBy('id_kometar', 'desc')->get());
    }

    public function downvotes(Request $request) {
        $data = ['total_downvote' => $request->input('total') + 1];
        DB::table('tbl_komentar')->where('id_kometar', $request->input('id_komentar'))->update($data);
        echo json_encode($data);
    }

    public function upvotes(Request $request) {
        $data = ['total_upvote' => $request->input('total') + 1];
        DB::table('tbl_komentar')->where('id_kometar', $request->input('id_komentar'))->update($data);
        echo json_encode($data);
    }

    public function komentar(Request $request) {
        $data = [
            'id_kendaraan' => $request->input('id_kendaraan'),
            'komentar' => $request->input('komentar'),
            'created_at' => date('Y-m-d h:i:s')
        ];
        DB::table('tbl_komentar')->insert($data);
        echo json_encode('sukses');
    }

}
