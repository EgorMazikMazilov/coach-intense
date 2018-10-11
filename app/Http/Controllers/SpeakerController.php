<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpeakerController extends Controller {

    public function execute(){
        if(view()->exists('admin.speakers')){
            $speakers = Speaker::all();

            $data = [
                'title'=> 'Зарегистрировавщиеся спикеры',
                'speakers'=> $speakers
            ];
            return view('admin.speakers', $data);
        }
    }
}