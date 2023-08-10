<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Kendaraan extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "kendaraans";
    protected $fillable = [
        'jenis_kendaraan',
        'type_kendaraan',
        'nomor_lambung',
        'nomor_polisi',
    ];
    protected $guarded = [];

    public function p2hs()
    {
        return $this->hasMany(P2h::class, 'kendaraan_id');
    }

    static public function getkendaraan()
    {
        $return = self::select('jenis_kendaraan', 'type_kendaraan', 'nomor_lambung', 'Created_at');
        if (!empty(Request::get('no_lambung'))) {
            $return = $return->where('nomor_lambung', 'like', '%' . Request::get('no_lambung') . '%');
        }
        $return = $return->orderBy('id', 'asc')->paginate(10, ['*'], 'kendaraan_page');

        return $return;
    }
}
