<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "kendaraans";
    protected $fillable = [
        'jenis_kendaraan',
        'nomor_lambung',
        'nomor_polisi',
    ];
    protected $guarded = [];

    public function p2hs()
    {
        return $this->hasMany(P2h::class, 'kendaraan_id');
    }
}
