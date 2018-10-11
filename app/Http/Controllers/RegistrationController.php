<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller {

    public function execute(){
        if(view()->exists('admin.registrations')){
            $registrations = Registration::all();
            $data = [
                'title'=> 'Зарегистрировавщиеся участники',
                'registrations'=> $registrations
            ];
            return view('admin.registrations', $data);
        }
    }
}
