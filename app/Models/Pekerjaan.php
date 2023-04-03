<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $fillable = [
      'nama_pekerjaan',
      'deskripsi_pekerjaan'
    ];

    public function kinerja() {
      return $this->belongsTo(Kinerja::class, 'pekerjaan_id', 'id');
    }
}
