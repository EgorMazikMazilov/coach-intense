<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

use App\Http\Requests;

class MenuController extends Controller
{
    public function execute(){
        if(view()->exists('admin.menus')){
          $menus = Menu::all();
          $data = [
              'title'=> 'Пункты меню',
              'menus'=> $menus
          ];
          return view('admin.menus', $data);
        }
    }
}
