<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    protected $fillable = [
        'Id_pasien',
        'Id_dokter',
        'tgl_periksa',
        'catatan',
        'biaya_periksa',
    ];

    public function pasien()
    {
        return $this->belongsTo(User::class, 'Id_pasien');
    }

    public function dokter()
    {
        return $this->belongsTo(User::class, 'Id_dokter');
    }

    public function detailPeriksa()
    {
        return $this->hasMany(DetailPeriksa::class, 'Id_periksa','id');
    }
}
