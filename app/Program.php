<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model {

	protected $fillable = [
	    'program_name',
        'speaker',
        'program_text',
        'img',
        'sort'
    ];

}
