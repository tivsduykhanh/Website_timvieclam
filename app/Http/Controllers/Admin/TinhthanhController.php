<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class TinhthanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData = DB::table('tinhthanhs')->select('id','tentinhthanh')->paginate(20);

        return view('admin.tinhthanhs.tinhthanh',['title'=> 'Quản lý Tỉnh thành'])->with('listtt', $getData);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tinhthanhs.themtinhthanh',['title'=>'Thêm mới tỉnh thành']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $allRequest  = $request->all();
        $tentinhthanh  = $allRequest['tentinhthanh'];
        $dataInsertToDatabase = array(
            'tentinhthanh' => $tentinhthanh,
        );
        $insertData = DB::table('tinhthanhs')->insert($dataInsertToDatabase);
        return redirect('/admin/tinhthanh');
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
        //get data from database
        $getData = DB::table('tinhthanhs')->select('id','tentinhthanh')->where('id',$id)->get();
        return view('admin.tinhthanhs.edittinhthanh',['title'=>'Sửa tỉnh thành'])->with('listtt', $getData);
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
        //get data from view
        $allRequest  = $request->all();
        $tentinhthanh  = $allRequest['tentinhthanh'];
        $dataUpdateToDatabase = array(
            'tentinhthanh' => $tentinhthanh,
        );
        $updateData = DB::table('tinhthanhs')->where('id',$request->id)->update($dataUpdateToDatabase);
        return redirect('/admin/tinhthanh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = DB::table('tinhthanhs')->where('id', '=', $id)->delete();
        return redirect('/admin/tinhthanh');
    }

    public function search(Request $request)
    {
        $search = $request['search'];

        $getData = DB::table('tinhthanhs')->where('tentinhthanh', 'like', '%' . $search . '%')->orderByDesc('created_at')->paginate(20);

        // return Redirect::back()->with('listnguoitimviec', $getData);
        return view('admin.tinhthanhs.tinhthanh',['title'=> 'Quản lý tỉnh thành'])->with('listtt', $getData);
    }
}
