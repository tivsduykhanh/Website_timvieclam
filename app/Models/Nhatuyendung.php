<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhatuyendung extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'sdt',
        'tencongty',
        'vitricongtac',
        'diadiemlamviec'
    ];

    public function jobs()
    {
        return $this->hasMany(job::class, 'nhatuyendung_id', 'id');
    }
}
