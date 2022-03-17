<?php

namespace App\Http\Controllers\Nguoitimviec;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index(){
        return view('user.contact',[
            'title' => 'Liên hệ với chúng tôi'
        ]);

        
    }

    public function store(Request $request)
    {
        
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $allRequest  = $request->all();
        $name  = $allRequest['name'];
        $email  = $allRequest['email'];
        $subject  = $allRequest['subject'];
        $message  = $allRequest['message'];

        
        // $nguoitimviec_id = Session::get('id');

        $dataInsertToDatabase = array(
            'tennglh' => $name,
            'emaillh' => $email,
            'chudelh' => $subject,
            'noidunglh' => $message,
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        );
        //Insert vào bảng lienhes
        $insertData = DB::table('lienhes')->insert($dataInsertToDatabase);
        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'Thêm mới liên hệ thành công!');
        } else {
            Session::flash('error', 'Thêm thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('/user');
    }
}
