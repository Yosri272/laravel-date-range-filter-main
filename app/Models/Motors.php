<?php

namespace App\models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Motors extends Model
{
    public $table = 'motors';

    use HasFactory;

    public $fillable = [
        'motor',
        'plate_number',
        'status',
        'counter_number',
        'oil_change',
        'c_folg',
        'license_number',
        'license_date',
         'counter',
        'maintenance_date'

    ];
}
