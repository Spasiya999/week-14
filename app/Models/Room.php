<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RoomsFactory;

class Room extends Model
{
    use HasFactory;

    protected $fillable =[
        'number',
        'type',
        'description',
        'beds',
        'occupancy',
        'price_per_hour',
        'status'
    ];

    const roomTypes = [
        'standard' => 'Standard',
        'deluxe' => 'Deluxe',
        'luxury' => 'Luxury',
        'suite' => 'Suite',
    ];

    const roomStatus = [
        'available' => 'Available',
        'unavailable' => 'Unavailable',
        'maintenance' => 'Maintenance',
    ];

    public static function newFactory(): RoomsFactory
    {
        return RoomsFactory::new();
    }
}
