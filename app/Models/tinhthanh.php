<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tinhthanh extends Model
{
    use HasFactory;

    protected $fillable = [
        'tentinhthanh'
    ];

    public function jobs()
    {
        return $this->hasMany(job::class, 'tinhthanh_id', 'id');
    }
}
