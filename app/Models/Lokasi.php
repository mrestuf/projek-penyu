<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lokasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_lokasi'
    ];

    public function aset()
    {
        return $this->belongsTo(Aset::class, 'id', 'lokasi_id');
    }
}
