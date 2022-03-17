<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LienheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData = DB::table('lienhes')->paginate(20);

        return view('admin.lienhe.ttlh',['title'=> 'Thông tin liên hệ'])->with('listlh', $getData);
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
        $deleteData = DB::table('lienhes')->where('id', '=', $id)->delete();
        return redirect('/admin/listlh');
    }

    public function search(Request $request)
    {
        $search = $request['search'];

        $getData = DB::table('lienhes')->where('tennglh', 'like', '%' . $search . '%')->orWhere('emaillh', 'like', '%' . $search . '%')->orWhere('chudelh', 'like', '%' . $search . '%')->orderByDesc('created_at')->paginate(10);

        // return Redirect::back()->with('listnguoitimviec', $getData);
        return view('admin.lienhe.ttlh',['title'=> 'Quản lý liên hệ'])->with('listlh', $getData);
    }
}
