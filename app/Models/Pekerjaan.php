<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pekerjaan extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'nama_pekerjaan',
    'deskripsi_pekerjaan'
  ];

  public function kinerja()
  {
    return $this->belongsTo(Kinerja::class, 'pekerjaan_id', 'id');
  }
}
