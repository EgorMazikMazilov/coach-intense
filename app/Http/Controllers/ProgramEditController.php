<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Program;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProgramEditController extends Controller {


	public function execute($id, Request $request, Program $program){

	    if($request->isMethod('post')){
	        //обработка чекбоксов /admin/programs
            if (isset($_POST['delUser']) and isset($_POST['item'])) {
                foreach ($_POST['item'] as $item) {
                    $delItem = Program::find($item);
                    $delItem->delete();
                }
                return redirect()->back();
            }
            // Получение данніх из формі  /admin/programs/edit/['id']
	        $input = $request->except('_token');
	        $validator = Validator::make($input, [
	            'program_name'=>'required|max:255',
	            'speaker'=>'max:255',
	            'program_text'=>'required',
	            'sort'=>'required'
            ]);
	        if ($validator->fails()){
	            return redirect()->route('programsEdit', ['page'=>$input['id']])->withErrors($validator);
            }
            if($request->hasFile('img')){
                $file = $request->file('img');
                $file->move(public_path().'/assets/img', $file->getClientOriginalName());
                $input['img'] = $file->getClientOriginalName();

            }
            else{
                $input['img'] = $input['old_images'];
            }
            unset($input['old_images']);
                // обновление данніх в БД
          DB::table('programs')->where('id', $input['id'])->update(["program_name" => $input['program_name'],"speaker" => $input['speaker'],"sort" => $input['sort'],"program_text" => $input['program_text'], "img" => $input['img'] ]);

            if($program->update()){
                return redirect('admin/programs');
            }
        }


	    $program = Program::find($id);

	    $old = $program -> toArray();

	    if(view()->exists('admin.programs_edit')){
            $data = [
                'title' => 'Редактирование пункта программы - '.$old['program_name'],
                'data' => $old
            ];

            return view('admin.programs_edit', $data);
        }

	}

}
