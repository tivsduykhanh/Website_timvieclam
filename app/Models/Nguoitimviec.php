<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Hoso;
class Nguoitimviec extends Model
{
    use HasFactory;
    protected $table = 'nguoitimviecs';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function hosos()
    {
        return $this->hasMany(Hoso::class, 'nguoitimviec_id', 'id');
    }
}
