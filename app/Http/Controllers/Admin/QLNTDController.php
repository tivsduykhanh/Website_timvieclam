<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QLNTDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData = DB::table('nhatuyendungs')->select('id','name','email','sdt','tencongty','diadiemlamviec','created_at')->paginate(20);

        return view('admin.nhatuyendung.ntd',['title'=> 'Quản lý Nhà tuyển dụng'])->with('listnhatuyendung', $getData);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('nhatuyendungs')->where('id', $id)->delete();
        return redirect('/admin/quanlyntd');
    }


    public function listbaidang($id)
    {
        //get all data from table
        $getData = DB::table('jobs')->where('nhatuyendung_id', $id)->get();
        //get data from loainganh
        $getDataLN = DB::table('loainganhs')->select('id','tennganh')->get();
        //get data from tinhthanh
        $getDataTT = DB::table('tinhthanhs')->select('id','tentinhthanh')->get();
        return view('admin.nhatuyendung.listbaidang',['title'=> 'Danh sách bài đăng'])->with('listbaidang', $getData)->with('listloainganh', $getDataLN)->with('listtinhthanh', $getDataTT);
    }

    public function search(Request $request)
    {
        $search = $request['search'];

        $getData = DB::table('nhatuyendungs')->where('name', 'like', '%' . $search . '%')->orWhere('email', 'like', '%' . $search . '%')->orWhere('sdt', 'like', '%' . $search . '%')->orWhere('tencongty', 'like', '%' . $search . '%')->orderByDesc('created_at')->paginate(20);

        return view('admin.nhatuyendung.ntd',['title'=> 'Quản lý Nhà tuyển dụng'])->with('listnhatuyendung', $getData);
    }
}
