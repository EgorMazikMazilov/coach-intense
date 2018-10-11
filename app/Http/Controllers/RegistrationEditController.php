<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Registration;
use Illuminate\Http\Request;

class RegistrationEditController extends Controller {

    public function execute(){

        if(isset($_POST['delUser']) and isset($_POST['item'])){
            foreach ($_POST['item'] as $item){
                $delItem = Registration::find($item);
                $delItem->delete();
            }
            return redirect()->back();
        }

    }
}
