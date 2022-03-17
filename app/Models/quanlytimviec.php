<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quanlytimviec extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id', 
        'hoso_id',
    ];

    //create relationship with table HoSo
    // public function hoso()
    // {
    //     return $this->hasOne(HoSo::class, 'Id', 'IDhoso');
    // }

    // //create relationship with table CongViec
    // public function congviec()
    // {
    //     return $this->hasOne(CongViec::class, 'Id', 'IDcongviec');
    // }
}
