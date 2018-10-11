<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Video;
use Illuminate\Http\Request;
use Validator;


class VideoAddController extends Controller {

    public function execute(Request $request){
        if($request->isMethod('post')){
            $input = $request->except('_token');

            if(!isset($input['is_active'])){
                $input['is_active'] =  0;
            }

            //правила валидирования
            $validator = Validator::make($input,[

                'header' => 'required|max:255',
                'video_link' => 'required'
            ]);


            //проверка на ошибки и возврат на предыдущую стрницу
            if($validator->fails()){
                return redirect()->route('videosAdd')->withErrors($validator)-> withInput();
            }

            //сохраняю инфо в БД. Создаю объект модели Program
            $video = new Video();
            //заполняю объект данными из формы
            $video ->fill($input);
            if($video ->save()){
                return redirect('admin/videos')->with('status', 'Пункт программы добавлен');
            }
        }

        if (view()->exists('admin.videos_add')){

            $data = [
                'title' => 'Новый видео отзыв'
            ];
            return view('admin.videos_add',$data);
        }
        abort(404);
    }
}

