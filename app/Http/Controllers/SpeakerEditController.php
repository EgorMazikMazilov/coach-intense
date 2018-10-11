<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpeakerEditController extends Controller {

	//
public function execute(Speaker $speaker, Request $request){

        if(isset($_POST['delUser']) and isset($_POST['item'])){
            foreach ($_POST['item'] as $item){
                $delItem = Speaker::find($item);
                $delItem->delete();
            }


         return redirect()->back();
    }

    }
}
