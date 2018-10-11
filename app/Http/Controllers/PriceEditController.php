<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class PriceEditController extends Controller {


        public function execute($id, Price $price, Request $request)
        {
            if ($request->isMethod('post')) {

                // Получение данніх из формі  /admin/videos/edit/['id']
                $input = $request->except('_token');
                $validator = Validator::make($input, [
                    'discount_price'=>'max:10',
                    'discount_price_2'=>'max:10',
                    'full_price'=>'max:10',


                ]);
                if ($validator->fails()){
                    return redirect()->route('pricesEdit', ['price'=>$input['id']])->withErrors($validator);
                }
                if(!isset($input['is_active'])){
                    $input['is_active'] = 0;
                }else{
                    $input['is_active'] = 1;
                }


                DB::table('prices')->where('id', $input['id'])->update(["discount_price" => $input['discount_price'],"discount_date" => $input['discount_date'], "discount_price_2" => $input['discount_price_2'],"discount_date_2" => $input['discount_date_2'], "full_price" => $input['full_price'], "event_date" => $input['event_date'],"is_active" => $input['is_active'],]);

                if($price->update()){
                    return redirect('admin/prices');
                }

            }


            //рендеринг страницы редактирования видео
            $price= Price::find($id);
            $old = $price -> toArray();

            if(view()->exists('admin.prices_edit')){
                $data = [
                    'title' => 'Редактирование цен и дат',
                    'data' => $old
                ];

                return view('admin.prices_edit', $data);
            }
        }
    }
