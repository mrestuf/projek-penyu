<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kinerja extends Model
{
    use HasFactory, SoftDeletes;

    public function pekerjaans()
    {
      return $this->belongsTo(Pekerjaan::class, 'pekerjaan_id', 'id');
    }
}
