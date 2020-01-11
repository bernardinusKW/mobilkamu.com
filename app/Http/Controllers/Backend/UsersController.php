<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\M_user;
class UsersController extends Controller {

    public function index() {
        $item = ['data_user' => m_user::all()];        
        $data = [
            'content' => view('backend.v_list_user', $item),
            'title' => 'Dashboard'
        ];
        return view('backend.main', $data);
    }

}
