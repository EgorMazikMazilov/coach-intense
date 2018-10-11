<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model {

    protected $fillable = [
        'discount_price',
        'discount_date',
        'discount_price_2',
        'discount_date_2',
        'full_price',
        'event_date',
        'is_active'
    ];

}
