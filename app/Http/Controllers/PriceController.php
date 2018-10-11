<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Price;
use Illuminate\Http\Request;

class PriceController extends Controller {

    public function execute(){


        if(view()->exists('admin.prices')){
            $prices = Price::all();
            $data = [
                'title'=> 'Даты и цены',
                'prices'=> $prices
            ];
            return view('admin.prices', $data);
        }
    }
}