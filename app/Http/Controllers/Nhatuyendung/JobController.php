<?php

namespace App\Http\Controllers\Nhatuyendung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Job\JobRequest;
use App\Http\Services\Job\JobUserService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\loainganh;
use App\Models\tinhthanh;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function B_JobList() 
    {
        session_start();

        $getData = DB::table('jobs')->select('id','tencongviec','mucluong','mota','loainganh_id')->where('nhatuyendung_id',Session::get('id'))->get();
        $data2 = DB::table('loainganhs')->select('id','tennganh')->get();
        return view('business.job.jobList', [
            'title' => 'Danh sách việc đã đăng'
        ])->with('listjob', $getData)->with('listnganh', $data2);
    }

    public function B_CreateJob()
    {
        return view('business.job.jobCreate', [
            'title' => 'Thêm bài đăng'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data1 = DB::table('tinhthanhs')->select('id','tentinhthanh')->get();
        $data2 = DB::table('loainganhs')->select('id','tennganh')->get();

        return view('business.job.jobCreate', [
            'title' => 'Thêm bài đăng'
        ])->with('listtinhthanh', $data1)->with('listnganh', $data2);
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

        $allRequest         = $request->all();
        $tencongviec        = $allRequest['tencongviec'];
        $tencongty          = $allRequest['tencongty'];
        $mucluong           = $allRequest['mucluong'];
        $kinhnghiem         = $allRequest['kinhnghiem'];
        $yeucaubangcap      = $allRequest['yeucaubangcap'];
        $chucvu             = $allRequest['chucvu'];
        $hinhthuclamviec    = $allRequest['hinhthuclamviec'];
        $soluongtuyen       = $allRequest['soluongtuyen'];
        $diadiemlamviec     = $allRequest['diadiemlamviec'];
        $mota               = $allRequest['mota'];
        $yeucau             = $allRequest['yeucau'];
        $quyenloi           = $allRequest['quyenloi'];
        $cachungtuyen       = $allRequest['cachungtuyen'];
        $hannophoso         = $allRequest['hannophoso'];
        $loainganh_id       = $allRequest['loainganh_id'];
        $tinhthanh_id       = $allRequest['tinhthanh_id'];


        $dataInsertToDatabase   = array(
            'tencongviec'       => $tencongviec,
            'tencongty'         => $tencongty,
            'mucluong'          => $mucluong,
            'kinhnghiem'        => $kinhnghiem,
            'yeucaubangcap'     => $yeucaubangcap,
            'chucvu'            => $chucvu,
            'hinhthuclamviec'   => $hinhthuclamviec,
            'soluongtuyen'      => $soluongtuyen,
            'diadiemlamviec'    => $diadiemlamviec,
            'mota'              => $mota,
            'yeucau'            => $yeucau,
            'quyenloi'          => $quyenloi,
            'cachungtuyen'      => $cachungtuyen,
            'hannophoso'        => $hannophoso,
            'nhatuyendung_id'   => Session::get('id'),
            'loainganh_id'      => $loainganh_id,
            'tinhthanh_id'      => $tinhthanh_id,
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),
        );


        //insert to database jobs
        $insert = DB::table('jobs')->insert($dataInsertToDatabase);
        //check insert result and pronounce
        if ($insert) {
            Session::flash('success', 'Thêm mới học sinh thành công!');
        } else {
            Session::flash('error', 'Thêm thất bại!');
        }

        return redirect('/business/job');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getData = DB::table('jobs')->where('id', $id)->first();
        
        return view ('business.job.jobDetail', [
            'title' => 'Chi tiết công việc'
        ])->with('jobdetail', $getData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get all data from database
        $data1 = DB::table('jobs')->select('*')->where('id',$id)->get();
        $data2 = DB::table('tinhthanhs')->select('id','tentinhthanh')->get();
        $data3 = DB::table('loainganhs')->select('id','tennganh')->get();

        //return view
        return view('business.job.jobEdit', [
            'title' => 'Sửa bài đăng'
        ])->with('jobEdit', $data1)->with('listtinhthanh', $data2)->with('listnganh', $data3);
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

        $selectedloainganh = new loainganh();
        $selectedtinhthanh = new tinhthanh();
        $selectedtinhthanh       = $request['tinhthanh_id'];
        $selectedloainganh       = $request['loainganh_id'];

        //update data to database
        $update = DB::table('jobs')->where('id', $request->id)->update ([
            'tencongviec'       => $request->tencongviec,
            'tencongty'         => $request->tencongty,
            'mucluong'          => $request->mucluong,
            'kinhnghiem'        => $request->kinhnghiem,
            'yeucaubangcap'     => $request->yeucaubangcap,
            'chucvu'            => $request->chucvu,
            'hinhthuclamviec'   => $request->hinhthuclamviec,
            'soluongtuyen'      => $request->soluongtuyen,
            'diadiemlamviec'    => $request->diadiemlamviec,
            'mota'              => $request->mota,
            'yeucau'            => $request->yeucau,
            'quyenloi'          => $request->quyenloi,
            'cachungtuyen'      => $request->cachungtuyen,
            'hannophoso'        => $request->hannophoso,
            'loainganh_id'      => $selectedloainganh,
            'tinhthanh_id'      => $selectedtinhthanh,
            'updated_at'        => date('Y-m-d H:i:s')
        ]);

        //dd($update, $request->id);
        if ($update) {
            Session::flash('success', 'Sửa thành công!');
        }else {                        
            Session::flash('error', 'Sửa thất bại!');
        }

        return redirect('/business/job');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('jobs')->where('id', $id)->delete();
        if ($data) {
            Session::flash('success', 'Xóa thành công!');
        }else {                        
            Session::flash('error', 'Xóa thất bại!');
        }

        return redirect('/business/job');
    }
}
