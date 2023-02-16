<?php

namespace App\models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Captains extends Model
{
    use HasFactory;
    public $table = 'captains';



    public $fillable = [
        'account_type',
        'name',
        'phone',
        'status',
        'pin_code',
        'motor',
        'license_number',
        'end_date',
        'c_folg',
        'Salary',
        'bonce'

    ];
}
