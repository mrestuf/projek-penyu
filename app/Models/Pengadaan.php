<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengadaan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'lokasi_id',
        'user_id',
        'nama_aset',
        'tahun_pengadaan',
        'harga_satuan',
        'volume',
        'satuan',
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }

    public function lokasi()
    {
        return $this->hasMany(Lokasi::class, 'id', 'lokasi_id');
    }
}
