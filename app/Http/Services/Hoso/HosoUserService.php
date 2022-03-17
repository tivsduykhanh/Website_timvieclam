<?php

namespace App\Http\Services\Hoso;


use App\Models\Hoso;
use Illuminate\Support\Facades\Session;

class HosoUserService
{
	public function insert($request)
	{
		try{
			$request->except('_token');
			Hoso::create($request->all());

			Session::flash('success', 'Thêm hồ sơ thành công');
		} catch (\Exception $err) {
			Session::flash('error', 'Thêm sản phẩm lỗi');
			log($err->getMessage());
			
			return false;
		}

		return true;
	}
}