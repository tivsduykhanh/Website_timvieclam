<?php

namespace App\Http\Controllers;

use App\Models\tinhthanh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $getData = DB::table('jobs')->select('id','tencongviec','tencongty','kinhnghiem','hinhthuclamviec','diadiemlamviec','mucluong','mota')
        ->orderByDesc('created_at')->paginate(7);
        $tinhthanhs = DB::table('tinhthanhs')->get();
		$loainganhs = DB::table('loainganhs')->get();
        return view('home', [
            'title' => 'JangHou Career'
        ])->with('jobs', $getData)->with('tinhthanhs', $tinhthanhs)->with('loainganhs', $loainganhs);
    }

    // public function searchtinhthanh (Request $request){
    //     $search = $request['search'];
	// 	$selecttinhthanh = new tinhthanh();
	// 	$selecttinhthanh['id'] = $request['searchtinhthanh'];

	// 	$tinhthanhs = DB::table('tinhthanhs')->get();
    //     $loainganhs = DB::table('loainganhs')->get();

	// 	//nhap tinhthanh
	// 	$jobs = DB::table('jobs')->Where('tinhthanh_id', $selecttinhthanh['id'])->orderByDesc('created_at')->get();

	// 	return view('searchresult', [
	// 		'title' => 'Kết quả tìm kiếm'
	// 	])->with('jobs', $jobs)->with('tinhthanhs', $tinhthanhs)->with('loainganhs', $loainganhs)->with('searchs', $search);
	// }
}
