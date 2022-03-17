<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Hoso as Hoso;


class ApplyController extends Controller
{
    public function listApllied()
    {
        $user = Session::get('id');
        //get data form table quanlytimviecs
        $list_apply = DB::table('quanlytimviecs')->get();
        //get data form table hosos
        $list_hoso = DB::table('hosos')->get();
        //get data form table jobs
        $list_job  = DB::table('jobs')->get();


        return view('user.vieclam.list_apply', ['title' => 'Danh sách việc đã apply'])->with('list_hoso', $list_hoso)
        ->with('listjob', $list_job)->with('list_apply', $list_apply)->with('user', $user);
    }

    public function applyTo(Request $request)
    {
        session_start();
        date_default_timezone_set("Asia/Ho_Chi_Minh");

        $hoso = new Hoso();
        $hoso = $request['tenhoso'];

        //insert data to database
        $data = array(
            'job_id'            => $request->id, 
            'hoso_id'           => $hoso,
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),
        );

        //insert data to database
        $insert = DB::table('quanlytimviecs')->insert($data);
        if ($insert) {
            Session::flash('success', 'Thêm mới thành công!');
        } else {
            Session::flash('error', 'Thêm thất bại!');
        }

        return redirect('/user/applied');
    }

    public function listApllying()
    {
        $user = Session::get('id');
        //get data form table quanlytimviecs
        $list_apply = DB::table('quanlytimviecs')->get();
        //get data form table hosos
        $list_hoso = DB::table('hosos')->get();
        //get data form table jobs
        $list_job  = DB::table('jobs')->get();


        return view('business.vieclam.applying', ['title' => 'Danh sách CV đã apply'])->with('list_hoso', $list_hoso)->with('listjob', $list_job)->with('list_apply', $list_apply)->with('user', $user);
    }

    public function destroy_applying($id)
    {
        $deleteData = DB::table('quanlytimviecs')->where('id', '=', $id)->delete();
	
        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Xóa thành công!');
        }else {                        
            Session::flash('error', 'Xóa thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('/business/applied');
    }

    public function destroy_cancel($id)
    {
        $deleteData = DB::table('quanlytimviecs')->where('id', '=', $id)->delete();
	
        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Xóa thành công!');
        }else {                        
            Session::flash('error', 'Xóa thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('/user/applied');
    }

    public function detail_applied($id){
        $getData = DB::table('jobs')->where('id', $id)->first();
        
        return view ('user.vieclam.detail_applied', [
            'title' => 'Chi tiết việc làm'
        ])->with('detailjob', $getData);
    }
}
