<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aset extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'kode_aset',
        'barang_id',
        'lokasi_id',
        'volume',
        'satuan',
        'kondisi',
        'umur_ekonomis',
        'nilai_aset',
        'sumber_dana',
        'qrcode'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'id', 'barang_id');
    }

    public function lokasi()
    {
        return $this->hasMany(Lokasi::class, 'id', 'lokasi_id');
    }
}
