<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'user_id',
      'transaction_id',
      'external_id',
      'status',
      'amount',
      'link_payment',
      'wisata_id'
    ];

    public function user(): BelongsTo
    {
      return $this->BelongsTo(User::class, 'user_id', 'id')->withTrashed();
    }

    public function wisata(): BelongsTo
    {
      return $this->BelongsTo(Wisata::class, 'wisata_id', 'id')->withTrashed();
    }
}
