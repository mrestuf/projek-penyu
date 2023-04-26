<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class KategoriBlog extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'nama_kategory',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'kategori_blog_id', 'id');
    }
}
