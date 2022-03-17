<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'tencongviec',
        'tencongty',
        'mucluong',
        'kinhnghiem',
        'yeucaubangcap',
        'chucvu',
        'hinhthuclamviec',
        'soluongtuyen',
        'diadiemlamviec',
        'mota',
        'yeucau',
        'quyenloi',
        'cachungtuyen',
        'hannophoso',
        'nhatuyendung_id',
        'nganh_id',
        'tinhthanh_id',
    ];

    public function nganhs()
    {
        return $this->hasOne(LoaiNganh::class, 'loainganh_id', 'id');
    }

    //create relationship with table TinhThanh
    public function tinhthanhs()
    {
        return $this->hasOne(TinhThanh::class, 'tinhthanh_id', 'id');
    }

    //create relationship with table NhaTuyenDung
    public function nhatuyendungs()
    {
        return $this->hasOne(NhaTuyenDung::class, 'nhatuyendung_id', 'id');
    }

    public function hosos()
    {
        return $this->morphToMany(hosos::class, 'quanlytimviecs');
    }
}
