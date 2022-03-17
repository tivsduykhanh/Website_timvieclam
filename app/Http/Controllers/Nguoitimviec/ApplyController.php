<?php

namespace App\Http\Controllers\Nguoitimviec;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ApplyController extends Controller
{
    // public function listhoso()
    // {
    //     session_start();
        
    //     $getData = DB::table('hosos')->select('id','imghoso','tenhoso')->where('nguoitimviec_id',Session::get('id'))->get();
        
    //     return view('user.apply.listhoso', [
    //         'title' => 'Chọn CV mà bạn muốn ứng tuyển'
    //     ])->with('listhoso', $getData);
    // }
}
