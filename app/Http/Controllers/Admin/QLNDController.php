<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QLNDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData = DB::table('nguoitimviecs')->select('id','name','email','created_at')->paginate(20);

        return view('admin.nguoitimviec.quanlyuser',['title'=> 'Quản lý Người tìm việc'])->with('listnguoitimviec', $getData);;
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
        $deleteData = DB::table('nguoitimviecs')->where('id', '=', $id)->delete();
        return redirect('/admin/quanlyntv');
    }

    public function search(Request $request)
    {
        $search = $request['search'];

        $getData = DB::table('nguoitimviecs')->where('name', 'like', '%' . $search . '%')->orWhere('email', 'like', '%' . $search . '%')->orderByDesc('created_at')->paginate(20);

        // return Redirect::back()->with('listnguoitimviec', $getData);
        return view('admin.nguoitimviec.quanlyuser',['title'=> 'Quản lý Người tìm việc'])->with('listnguoitimviec', $getData);
    }
}
