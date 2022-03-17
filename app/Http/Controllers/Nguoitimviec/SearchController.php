<?php

namespace App\Http\Controllers\Nguoitimviec;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
		{

		//  dd($request);
		// $selecttinhthanh = new tinhthanh();
		// $selectloainganh = new loainganh();

		$search = $request['search'];

		$selecttinhthanh['id'] = $request['searchtinhthanh'];

		$selectloainganh['id'] = $request['searchloainganh'];
		// dd($selecttinhthanh, $selectloainganh, $search);
		$tinhthanhs = DB::table('tinhthanhs')->get();
		$loainganhs = DB::table('loainganhs')->get();

		$jobs = DB::table('jobs')->orderByDesc('created_at')->paginate(10);
		//Tat ca deu nhap
		if ($search != null && $selecttinhthanh['id'] != null && $selectloainganh['id'] != null) {
			$jobs = DB::table('jobs')->where('tencongviec', 'like', '%' . $search . '%')
				->Where('tinhthanh_id', $selecttinhthanh['id'])->Where('loainganh_id', $selectloainganh['id'])->orderByDesc('created_at')->paginate(10);
		}
		//nhap search, loainganh
		else if ($search != null && $selecttinhthanh['id'] == null && $selectloainganh['id'] != null) {
			$jobs = DB::table('jobs')->where('tencongviec', 'like', '%' . $search . '%')->
			Where('loainganh_id', $selectloainganh['id'])->orderByDesc('created_at')->paginate(10);
		}
		//nhap search, tinhthanh
		else if ($search != null && $selecttinhthanh['id'] != null && $selectloainganh['id'] == null) {
			$jobs = DB::table('jobs')->where('tencongviec', 'like', '%' . $search . '%')
			->Where('tinhthanh_id', $selecttinhthanh['id'])->orderByDesc('created_at')->paginate(10);
		}
		//nhap tinhthanh, loainganh
		else if ($search == null && $selecttinhthanh['id'] != null && $selectloainganh['id'] != null) {
			$jobs = DB::table('jobs')->Where('tinhthanh_id', $selecttinhthanh['id'])->Where('loainganh_id', $selectloainganh['id'])->orderByDesc('created_at')->paginate(10);
		}
		//nhap search
		else if ($search != null && $selecttinhthanh['id'] == null && $selectloainganh['id'] == null) {
			$jobs = DB::table('jobs')->where('tencongviec', 'like', '%' . $search . '%')->orderByDesc('created_at')->paginate(10);
		}
		//nhap tinhthanh
		else if ($search == null && $selecttinhthanh['id'] != null && $selectloainganh['id'] == null) {
			$jobs = DB::table('jobs')->Where('tinhthanh_id', $selecttinhthanh['id'])->orderByDesc('created_at')->paginate(10);
		}
		//nhap loainganh
		else if ($search == null && $selecttinhthanh['id'] == null && $selectloainganh['id'] != null) {
			$jobs = DB::table('jobs')->Where('loainganh_id', $selectloainganh['id'])->orderByDesc('created_at')->paginate(10);
		}

		return view('user.timkiem.searchresult', [
			'title' => 'Kết quả tìm kiếm'
		])->with('jobs', $jobs)->with('tinhthanhs', $tinhthanhs)->with('loainganhs', $loainganhs)->with('searchs', $search);
	}
}
