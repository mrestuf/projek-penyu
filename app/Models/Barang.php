<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'merek_barang',
        'tahun_perolehan'
    ];

    public function barang()
    {
        return $this->belongsTo(Aset::class, 'barang_id', 'id');
    }
}
