<?php

namespace App\Http\Controllers\Nguoitimviec;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(){
        
        $getData = DB::table('jobs')->select('id','tencongviec','tencongty','kinhnghiem','hinhthuclamviec','diadiemlamviec','mucluong')->orderByDesc('created_at')->paginate(10);
        return view ('user.vieclam.job', [
            'title' => 'Việc làm'
        ])->with('listjob', $getData);
    }

    public function show($id,Request $request){

        $getData = DB::table('jobs')->where('id', $id)->first();
        $list_hoso = DB::table('hosos')->where('nguoitimviec_id',$request->session()->get('id'))->get();
        
        return view ('user.vieclam.detailjob', [
            'title' => 'Chi tiết việc làm'
        ])->with('detailjob', $getData)->with('list_hoso', $list_hoso);
    }
}
