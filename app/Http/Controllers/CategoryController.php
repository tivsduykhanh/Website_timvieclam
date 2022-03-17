<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $getData = DB::table('jobs')->orderByDesc('created_at')->paginate(10);
        $tinhthanhs = DB::table('tinhthanhs')->get();
		$loainganhs = DB::table('loainganhs')->get();
        return view ('job', [
            'title' => 'Việc làm'
        ])->with('jobs', $getData)->with('tinhthanhs', $tinhthanhs)->with('loainganhs', $loainganhs);
    }

    public function show($id){
        $getData = DB::table('jobs')->select('id','tencongviec','tencongty','mucluong','kinhnghiem','yeucaubangcap',
        'chucvu','hinhthuclamviec','soluongtuyen','diadiemlamviec','mota','yeucau','quyenloi','cachungtuyen','hannophoso')
        ->where('id', $id)->first();
        
        return view ('detailjob', [
            'title' => 'Chi tiết việc làm'
        ])->with('detailjob', $getData);
    }

    
}
