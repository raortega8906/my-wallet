<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TargetBalance extends Model
{
    protected $fillable = [
        'target_balance',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
