<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;

class ProgramAddController extends Controller
{
   public function execute(Request $request){
       if($request->isMethod('post')){
            $input = $request->except('_token');

               //правила валидирования
            $validator = Validator::make($input,[

                'program_name' => 'required|max:255',
                'speaker' => 'required|max:255',
                'sort' => 'required',
                'program_text' => 'required'

            ]);
                //проверка на ошибки и возврат на предыдущую стрницу
            if($validator->fails()){
                return redirect()->route('programsAdd')->withErrors($validator)-> withInput();
            }
            /* работа с загружаемыми файлами */
           // получаем экземпляр объекта UploadedFile
           if($request->hasFile('img')) {
               $file = $request->file('img');
               $input['img'] = $file->getClientOriginalName();

               // перемещаем файл

               $file->move(public_path().'/assets/img', $input['img']);

           }

           //сохраняю инфо в БД. Создаю объект модели Program
           $program = new Program();
           //заполняю объект данными из формы
           $program->fill($input);

           if($program->save()){
               return redirect('admin/programs')->with('status', 'Пункт программы добавлен');
           }
       }

    if (view()->exists('admin.programs_add')){

        $data = [
            'title' => 'Новый пункт программы'
        ];
return view('admin.programs_add',$data);
        }
        abort(404);
   }
}
