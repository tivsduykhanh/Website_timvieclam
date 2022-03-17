<?php

namespace App\Http\Controllers\Nguoitimviec;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nguoitimviec;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

session_start();

class AuthController extends Controller
{
    public function index()
    {
        return view('user.auth.login', [
            'title' => 'Đăng nhập cho người tìm việc'
        ]);
    }  



    public function customLogin(Request $request )
    {
        $email = $request->email;
        $password = $request->password;
        
        $result = DB::table('nguoitimviecs')->where('email', $email)->where('password', $password)->first();
        if($result){
       
            Session::put('name', $result->name);
            Session::put('id', $result->id);
           
            
            return redirect()->route('userhome');
        }else {
            Session::put('message', 'Email hoặc mật khẩu không đúng');
            return redirect()->back();
        }
    }


    public function registration()
    {
        return view('user.auth.register', [
            'title' => 'Đăng ký cho người tìm việc'
        ]);
    }


    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:nguoitimviecs',
            'password' => 'required|min:6',

        ]);

        $data = $request->all();
        $check = $this->create($data);

        
        return redirect()->route('userlogin');
    }


    public function create(array $data)
    {
        return Nguoitimviec::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $data['password'],


        ]);
    }    
    

    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return redirect()->route('home');
    //     }
  
    //     return redirect()->route('userlogin')->withSuccess('You are not allowed to access');
    // }
    

    public function logout() {
        Session::put('id', null);
        Session::put('name', null);
        return Redirect()->route('home');
    }
}
