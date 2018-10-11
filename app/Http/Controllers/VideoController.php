<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller {


    public function execute(){
        if(view()->exists('admin.videos')){
            $videos = Video::all();
            $data = [
                'title'=> 'Видеоотзывы',
                'videos'=> $videos
            ];
            return view('admin.videos', $data);
        }
    }

}
