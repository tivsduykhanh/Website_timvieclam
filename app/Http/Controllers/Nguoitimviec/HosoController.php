<?php

namespace App\Http\Controllers\Nguoitimviec;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hoso\HosoRequest;
use App\Http\Services\Hoso\HosoUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Hoso;
use App\Models\Nguoitimviec;
use Illuminate\Support\Facades\Auth;


class HosoController extends Controller
{
    public function __construct()
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // protected $HosoService;

    // public function __construct(HosoUserService $HosoService)
    // {
    //     $this->HosoService = $HosoService;
    // }


    public function index()
    {
        session_start();
        
        $getData = DB::table('hosos')->select('id','imghoso','tenhoso')->where('nguoitimviec_id',Session::get('id'))->get();

        return view('user.hoso.index', [
            'title' => 'Hồ sơ'
        ])->with('listhoso', $getData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(Hoso::get()->fisrt()->nguoitimviec-);
        return view('user.hoso.add', [
            'title' => 'Tạo CV'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->HosoService->insert($request);
       
        // return redirect()->back();

        session_start();
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $allRequest  = $request->all();
        $tenhoso  = $allRequest['tenhoso'];
        $imghoso = $allRequest['imghoso'];
        $hoten = $allRequest['hoten'];
        $sdt = $allRequest['sdt'];
        $email = $allRequest['email'];
        $ngaysinh = $allRequest['ngaysinh'];
        $diachi = $allRequest['diachi'];
        $gioithieu = $allRequest['gioithieu'];
        $kynang = $allRequest['kynang'];
        $hocvan = $allRequest['hocvan'];
        $kinhnghiem = $allRequest['kinhnghiem'];
        $hoatdong = $allRequest['hoatdong'];
        // $nguoitimviec_id = Session::get('id');

        $dataInsertToDatabase = array(
            'tenhoso' => $tenhoso,
            'imghoso' => $imghoso,
            'hoten' => $hoten,
            'sdt' => $sdt,
            'email' => $email,
            'ngaysinh' => $ngaysinh,
            'diachi' => $diachi,
            'gioithieu' => $gioithieu,
            'kynang' => $kynang,
            'hocvan' => $hocvan,
            'kinhnghiem' => $kinhnghiem,
            'hoatdong' => $hoatdong,
            'nguoitimviec_id' => Session::get('id'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        );

        //Insert vào bảng hosos
        $insertData = DB::table('hosos')->insert($dataInsertToDatabase);
        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'Thêm mới học sinh thành công!');
        } else {
            Session::flash('error', 'Thêm thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('/user/hoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getData = DB::table('hosos')->where('id', $id)->first();
        
        return view ('user.hoso.detail', [
            'title' => 'Chi tiết CV'
        ])->with('detailcv', $getData);
    }

    public function showcv($id)
    {
        $getData = DB::table('hosos')->where('id', $id)->first();
        $getData1 = DB::table('jobs')->get();
        $getData2 = DB::table('quanlytimviecs')->get();
        
        return view ('business.vieclam.detailcv', [
            'title' => 'Chi tiết CV'
        ])->with('detailcv', $getData)->with('listjob', $getData1)->with('listquanlytimviec', $getData2);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Lấy dữ liệu từ Database với các trường được lấy và với điều kiện id = $id
        $getData = DB::table('hosos')->select('id','tenhoso','imghoso','hoten','sdt','email','ngaysinh',
        'diachi','gioithieu','kynang','hocvan','kinhnghiem','hoatdong')->where('id',$id)->get();
        
        //Gọi đến file edit.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên getHoSoById = $getData
        return view('user.hoso.edit',[
            'title'=>'Sửa CV'
        ])->with('getHoSoById',$getData);
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
 
        //Thực hiện câu lệnh update với các giá trị $request trả về
        $updateData = DB::table('hosos')->where('id', $request->id)->update([
            'tenhoso' => $request->tenhoso,
            'imghoso' => $request->imghoso,
            'hoten' => $request->hoten,
            'sdt' => $request->sdt,
            'email' => $request->email,
            'ngaysinh' => $request->ngaysinh,
            'diachi' => $request->diachi,
            'gioithieu' => $request->gioithieu,
            'kynang' => $request->kynang,
            'hocvan' => $request->hocvan,
            'kinhnghiem' => $request->kinhnghiem,
            'hoatdong' => $request->hoatdong,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        
        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa CV thành công!');
        }else {                        
            Session::flash('error', 'Sửa CV thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('/user/hoso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Xoa hoc sinh
	//Thực hiện câu lệnh xóa với giá trị id = $id trả về
	$deleteData = DB::table('hosos')->where('id', '=', $id)->delete();
	
	//Kiểm tra lệnh delete để trả về một thông báo
	if ($deleteData) {
		Session::flash('success', 'Xóa CV thành công!');
	}else {                        
		Session::flash('error', 'Xóa CV thất bại!');
	}
	
	//Thực hiện chuyển trang
	return redirect('/user/hoso');
    }
}
