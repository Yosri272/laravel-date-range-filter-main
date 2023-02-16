<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ofline extends Model
{
    public $table = 'oflines';

    use HasFactory;

    public $fillable = [

        'order_date',
        'customer_name',
        'customer_location',
        'phone_number',
        'income',
        'delevery_fees',
        'status',
        'captain_name',
		'product_type',
        'payment',
        'merchant',
        'note',

    ];
}
