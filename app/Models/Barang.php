<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'kategori_barang_id',
        'nama_barang',
        'merek_barang',
        'tahun_perolehan'
    ];

    public function kategori_barang()
    {
        return $this->hasMany(KategoriBarang::class, 'id', 'kategori_barang_id');
    }

    public function aset()
    {
        return $this->belongsTo(Aset::class, 'id', 'barang_id');
    }
}
