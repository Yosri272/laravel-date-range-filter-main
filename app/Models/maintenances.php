<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maintenances extends Model
{
    public $table = 'maintenances';

    use HasFactory;

    public $fillable = [
        'plate_number',
        'maintenance_details',
        'Maintenance_date',
        'amount'

    ];
}
