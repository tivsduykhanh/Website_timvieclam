<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoso extends Model
{
    use HasFactory;
    protected $table = 'hosos';
    protected $fillable = [
        'tenhoso',
        'imghoso',
        'hoten',
        'sdt',
        'email',
        'ngaysinh',
        'diachi',
        'gioithieu',
        'kynang',
        'hocvan',
        'kinhnghiem',
        'hoatdong',
        'nguoitimviec_id'
    ];
    public function nguoitimviecs()
    {
        return $this->hasOne(Nguoitimviec::class, 'nguoitimviec_id', 'id');
    }

    public function jobs()
    {
        return $this->morphToMany(jobs::class, 'quanlytimviecs');
    }
}
