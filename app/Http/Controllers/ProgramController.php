<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProgramController extends Controller
{
    public function execute(){
        if(view()->exists('admin.programs')){
            $programs = Program::all();
            $data = [
                'title'=> 'Программа',
                'programs'=> $programs
            ];
            return view('admin.programs', $data);
        }
    }
}
