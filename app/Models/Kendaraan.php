<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = ["kendaraans"];
    protected $fillable = [
        'jenis_kendaraan',
        'nomor_lambung',
        'nomor_polisi',
    ];
    protected $guarded = [];

    public function p2h()
    {
        return $this->hasMany(P2h::class);
    }
}
