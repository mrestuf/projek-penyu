<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absensi extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'pegawai_id',
    'jadwal_masuk',
    'jadwal_keluar'
  ];

  public function pegawai()
  {
    return $this->hasMany(Pegawai::class, 'id', 'pegawai_id');
  }
}
