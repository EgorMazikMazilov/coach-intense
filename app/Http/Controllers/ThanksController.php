<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ThanksController extends Controller
{
    public function execute(){

        return view('site.thanks');
    }
}
