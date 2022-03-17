<?php

namespace App\Http\Controllers\Nhatuyendung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $getData = DB::table('jobs')->orderByDesc('created_at')->paginate(7);
        $tinhthanhs = DB::table('tinhthanhs')->get();
		$loainganhs = DB::table('loainganhs')->get();
        return view('business.home', [
            'title' => 'Trang chủ nhà tuyển dụng'
        ])->with('jobs', $getData)->with('tinhthanhs', $tinhthanhs)->with('loainganhs', $loainganhs);
    }
}
