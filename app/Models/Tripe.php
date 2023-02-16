<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Tripe extends Model
{
    public $table = 'tripes';

    use HasFactory;

    public $fillable = [

        'date_id',
        'captain_id',
        'captain_name',
        'phone_number',
        't_id',
        'captain_action',
        'trip_status',
        'total_fare',
         'eta',
        'pickup_to_dropoff_distance',

    ];
}
