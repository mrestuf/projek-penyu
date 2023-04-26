<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'judul_blog',
        'kategori_blog_id',
        'content',
        'gambar'
    ];

    public function kategori_blog()
    {
        return $this->hasMany(KategoriBlog::class, 'id', 'kategori_blog_id');
    }
}
