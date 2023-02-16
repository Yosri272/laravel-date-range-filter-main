<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commission extends Model
{
    use HasFactory;
    public $table = 'commissions';



    public $fillable = [
        'captain_name',
        'number_trips',
        'amount_commission'

    ];
}
