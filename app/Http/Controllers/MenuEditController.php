<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class MenuEditController extends Controller {


    public function execute($id, Menu $menu, Request $request)
    {
        if ($request->isMethod('post')) {
            // обработка чекбоксов /admin/videos
            if (isset($_POST['delUser']) and isset($_POST['item'])) {
                foreach ($_POST['item'] as $item) {
                    $delItem = Menu::find($item);
                    $delItem->delete();
                }
                return redirect()->back();
            }
            // Получение данніх из формі  /admin/videos/edit/['id']

            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'name'=>'required|max:255',
                'anchor'=>'max:255'
            ]);

            if ($validator->fails()){
                return redirect()->route('menusEdit', ['menu'=>$input['id']])->withErrors($validator);
            }
            if(!isset($input['is_active'])){
                $input['is_active'] =  0;
            }else{
                $input['is_active'] =  1;
            }
            if(!isset($input['is_phone'])){
                $input['is_phone'] =  0;
            }
            else{
                $input['is_phone'] =  1;
            }

            DB::table('menus')->where('id', $input['id'])->update(["name" => $input['name'],"anchor" => $input['anchor'],"is_phone" => $input['is_phone'],"is_active" => $input['is_active'] ]);

            if($menu->update()){
                return redirect('admin/menus');
            }

        }


        //рендеринг страницы редактирования видео
        $menu= Menu::find($id);

        $old = $menu -> toArray();

        if(view()->exists('admin.menus_edit')){
            $data = [
                'title' => 'Редактирование пункта меню - '.$old['name'],
                'data' => $old
            ];

            return view('admin.menus_edit', $data);
        }
    }
}
