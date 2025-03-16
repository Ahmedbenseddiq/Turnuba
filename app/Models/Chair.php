<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    protected $fillable = [
        'number',
        'isReserved',
        'avgTime',
        'barber_id',
        'barbershop_id',
    ];

    public function barberShop()
    {
        return $this->belongsTo(BarberShop::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function barber()
    {
        return $this->hasOne(Barber::class);
    }
    
}
