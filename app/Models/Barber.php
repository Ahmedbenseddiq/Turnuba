<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Psy\Readline\Hoa\FileLink;

class Barber extends Model
{
    protected $fillable = [
        'user_id',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chair()
    {
        return $this->hasOne(Chair::class);
    }
}
