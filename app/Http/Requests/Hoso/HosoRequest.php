<?php

namespace App\Http\Requests\Hoso;

use Illuminate\Foundation\Http\FormRequest;

class HosoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'imghoso' => 'required',
            'tenhoso' => 'required',
            'hoten' => 'required',
            'sdt' => 'required',
            'email' => 'required',
            'ngaysinh' => 'required',
            'diachi' => 'required',
            'gioithieu' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'imghoso.required' => 'Ảnh đại diện không dược trống',
            'tenhoso.required' => 'Vui lòng nhập tên tiêu đề',
            'hoten.required' => 'Vui lòng nhập họ và tên',
            'sdt.required' => 'Vui lòng nhập số điện thoại',
            'email.required' => 'Vui lòng nhập email',
            'ngaysinh.required' => 'Vui lòng nhập ngày sinh',
            'diachi.required' => 'Vui lòng nhập địa chỉ',
            'gioithieu.required' => 'Vui lòng nhập giới thiệu bản thân',
        ];
    }
}
