<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wisata extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'name_wisata',
      'description',
      'price',
      'images'
    ];

    protected $casts = [
      'images' => 'array'
    ];
}
