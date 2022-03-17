<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loainganh extends Model
{
    use HasFactory;

    protected $fillable = [
        'tennganh'
    ];

    public function jobs()
    {
        return $this->hasMany(job::class, 'loainganh_id', 'id');
    }
}
