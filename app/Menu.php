<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

    protected $fillable = [
        'name',
        'amchor',
        'is_active',
        'is_phone'
    ];

}
