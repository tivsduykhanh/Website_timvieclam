<?php

namespace App\Http\Controllers\Nhatuyendung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        
        $getData = DB::table('jobs')->select('id','tencongviec','tencongty','kinhnghiem','hinhthuclamviec','diadiemlamviec','mucluong')->orderByDesc('created_at')->paginate(10);
        return view ('business.vieclam.job', [
            'title' => 'Việc làm'
        ])->with('listjob', $getData);
    }

    public function show($id){
        $getData = DB::table('jobs')->where('id', $id)->first();
        
        return view ('business.vieclam.detailjob', [
            'title' => 'Chi tiết việc làm'
        ])->with('detailjob', $getData);
    }
}
