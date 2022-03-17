<?php

namespace App\Http\Controllers\Nhatuyendung;

use App\Http\Controllers\Controller;
use App\Models\Nhatuyendung;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

session_start();

class AuthBusinessController extends Controller
{
    public function index()
    {
        return view('business.auth.login', [
            'title' => 'Đăng nhập cho người tìm việc'
        ]);
    }  


    public function customLogin(Request $request )
    {
        $email = $request->email;
        $password = $request->password;

        $result = DB::table('nhatuyendungs')->where('email', $email)->where('password', $password)->first();
        if($result){
            Session::put('name', $result->name);
            Session::put('id', $result->id);
            return redirect()->route('businesshome');
        }else {
            Session::put('message', 'Email hoặc mật khẩu không đúng');
            return redirect()->back();
        }
    }


    public function registration()
    {
        return view('business.auth.register', [
            'title' => 'Đăng ký cho nhà tuyển dụng'
        ]);
    }


    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'sdt' => 'required',
            'tencongty' => 'required',
            'vitricongtac' => 'required',
            'diadiemlamviec' => 'required'
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect()->route('businesshome');
    }


    public function create(array $data)
    {
        return Nhatuyendung::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $data['password'],
        'sdt' => $data['sdt'],
        'tencongty' => $data['tencongty'],
        'vitricongtac' => $data['vitricongtac'],
        'diadiemlamviec' => $data['diadiemlamviec'],
        ]);
    }    
    

    public function logout() {
        Auth::logout();
        Session::flush();
        return Redirect()->route('home');
    }
}
