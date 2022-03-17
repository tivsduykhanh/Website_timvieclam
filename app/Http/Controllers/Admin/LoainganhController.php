<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class LoainganhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData = DB::table('loainganhs')->select('id','tennganh')->paginate(20);

        return view('admin.nganh.loainganh',['title'=> 'Quản lý Ngành'])->with('listnganh', $getData);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nganh.themnganh',['title'=>'Thêm mới ngành']); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();
        date_default_timezone_set("Asia/Ho_Chi_Minh");

        $allrequest = $request->all();
        $tennganh = $allrequest['tennganh'];
        //store data
        $data = array(
            'tennganh' => $tennganh,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        );

        //insert data
        $insert = DB::table('loainganhs')->insert($data);
        //check if sucess
        if ($insert) {
            Session::flash('success', 'Thêm mới thành công!');
        } else {
            Session::flash('error', 'Thêm thất bại!');
        } 

        
        return redirect('/admin/loainganh');
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
        //get data
        $getData = DB::table('loainganhs')->select('id','tennganh')->where('id',$id)->get();

        //return view
        return view('admin.nganh.editnganh',['title'=>'Sửa ngành'])->with('listnganh', $getData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        
        //update data to database
        $update = DB::table('loainganhs')->where('id',$request->id)->update(['tennganh' => $request->tennganh, 'updated_at' => date('Y-m-d H:i:s')]);
        //dd($update, $request->tennganh);
        if ($update) {
            Session::flash('success', 'Sửa thành công!');
        } else {
            Session::flash('error', 'Sửa thất bại!');
        }
        return redirect('/admin/loainganh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = DB::table('loainganhs')->where('id', '=', $id)->delete();
        return redirect('/admin/loainganh');
    }

    public function search(Request $request)
    {
        $search = $request['search'];

        $getData = DB::table('loainganhs')->where('tennganh', 'like', '%' . $search . '%')->orderByDesc('created_at')->paginate(20);

        // return Redirect::back()->with('listnguoitimviec', $getData);
        return view('admin.nganh.loainganh',['title'=> 'Quản lý loại ngành'])->with('listnganh', $getData);
    }
}
