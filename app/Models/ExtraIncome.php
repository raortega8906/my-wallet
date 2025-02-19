<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraIncome extends Model
{
    protected $fillable = [
        'name',
        'description',
        'amount',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
