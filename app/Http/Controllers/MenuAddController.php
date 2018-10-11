<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuAddController extends Controller {

    public function execute(Request $request){
        if($request->isMethod('post')){
            $input = $request->except('_token');

            if(!isset($input['is_active'])){
                $input['is_active'] =  0;
            }
            if(!isset($input['is_phone'])){
                $input['is_phone'] =  0;
            }

            //правила валидирования
            $validator = Validator::make($input,[

                'name' => 'required|max:255',
                'is_phone' => 'required',
                'is_active' => 'required'
            ]);


            //проверка на ошибки и возврат на предыдущую стрницу
            if($validator->fails()){
                return redirect()->route('menusAdd')->withErrors($validator)-> withInput();
            }

            //сохраняю инфо в БД. Создаю объект модели Program
            $menu = new Menu();
            //заполняю объект данными из формы
            $menu ->fill($input);

            if($menu ->save()){
                return redirect('admin/menus')->with('status', 'Пункт меню добавлен');
            }
        }

        if (view()->exists('admin.menus_add')){

            $data = [
                'title' => 'Новый пункт меню'
            ];
            return view('admin.menus_add',$data);
        }
        abort(404);
    }
}
