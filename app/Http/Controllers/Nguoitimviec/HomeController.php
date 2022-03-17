<?php

namespace App\Http\Controllers\Nguoitimviec;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function index()
    {
        $getData = DB::table('jobs')->orderByDesc('created_at')->paginate(7);
        $tinhthanhs = DB::table('tinhthanhs')->get();
		$loainganhs = DB::table('loainganhs')->get();
        return view('user.home', [
            'title' => 'Trang chủ người tìm việc'
        ])->with('jobs', $getData)->with('tinhthanhs', $tinhthanhs)->with('loainganhs', $loainganhs);
    }
}
