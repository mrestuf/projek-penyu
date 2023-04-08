<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_kategori',
        'nama_kategori'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kategori_barang_id', 'id');
    }
}
