<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_aset',
        'barang_id',
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
}
