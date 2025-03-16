<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    protected $fillable = [
        'name',
        'description',
        'type',
        'data',
        'generated_at',
        'user_id',
    ];

    protected $casts = [
        'generated_at' => 'datetime',
        'data' => 'json',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}