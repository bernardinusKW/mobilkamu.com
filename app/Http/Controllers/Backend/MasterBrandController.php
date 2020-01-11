<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterBrandController extends Controller {

    public function index() {
        $item = ['items' => DB::table('tbl_brand')->where('status_brand', 1)->orderBy('id_brand', 'desc')->get()];
        $data = [
            'content' => view('backend.v_list_brand_mobil', $item),
            'title' => 'Dashboard'
        ];
        return view('backend.main', $data);
    }

    public function store(Request $request) {
        request()->validate(
                ['TxtNamaBrand' => 'required', 'TxtDeskripsiBrand' => 'required'],
                ['TxtNamaBrand.required' => '<label class="error salah">Nama Brand Harus diisi</label>', 'TxtDeskripsiBrand.required' => '<label class="error salah">Deskripsi Brand Harus diisi</label>']
        );

        $id_brand = $request->input('id_brand');
        $data = [
            'nama_brand' => $request->input('TxtNamaBrand'),
            'deskripsi_brand' => $request->input('TxtDeskripsiBrand'),
            'status_brand' => 1
        ];

        if ($id_brand == '') {
            $data['created_at'] = date('Y-m-d h:i:s');
            DB::table('tbl_brand')->insert($data);
            $msg = 'Data Berhasil ditambahkan';
        } else {
            $data['updated_at'] = date('Y-m-d h:i:s');
            DB::table('tbl_brand')->where('id_brand', $id_brand)->update($data);
            $msg = 'Data Berhasil diupdate';
        }
        echo json_encode(array('success' => true, 'msg' => array(
                'title' => 'Success',
                'type' => 'success',
                'text' => $msg                
        )));
    }

    public function update(Request $request) {
        echo json_encode(DB::table('tbl_brand')->where('id_brand', $request->input('id'))->first());
    }

    public function destroy(Request $request) {
        echo json_encode(DB::table('tbl_brand')->where('id_brand', $request->input('id'))->update(['status_brand'=>0]));        
    }

}
