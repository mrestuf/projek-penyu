<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinerja extends Model
{
    use HasFactory;

    public function pekerjaans()
    {
      return $this->belongsTo(Pekerjaan::class, 'pekerjaan_id', 'id');
    }
}
