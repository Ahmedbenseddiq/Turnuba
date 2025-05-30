<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarberShop extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'type',
        'owner_id',
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function barbers()
    {
        return $this->hasMany(Barber::class);
    }

    public function chairs()
    {
        return $this->hasMany(Chair::class);
    }
    
}
