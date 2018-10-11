<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {

    protected $fillable = [
        'header',
        'video_link',
        'is_active'
    ];
}
