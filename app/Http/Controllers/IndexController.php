<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Mail;
use App\Menu;
use App\Price;
use App\Program;
use App\Video;
use Illuminate\Http\Request;
use Cache; 

class IndexController extends Controller {

	//
    public function execute(Request $request){


        /*form feat them input*/
        if (isset($request['theme']) && $request->isMethod('post')){
            //error messages array
            $messages = [
                'required' => "Поле :attribute обязательно к заполнению",
                'email' => "Поле :attribute обязательно к заполнению",
                'phone' => "Поле :attribute обязательно к заполнению",
                'theme' => "Поле :attribute обязательно к заполнению"
            ];
            //validate form data
            $this->validate($request,[
                'name'=>'required|max:255',
                'email'=>'required',
                'phone'=>'required',
                'theme'=>'required',
            ], $messages);
            $data = $request->all();

            //mail send code here
            $result =  Mail::send('site.email', ['data'=>$data], function($message) use ($data){
                $mail_admin = env('MAIL_ADMIN');
                $message->from($data['email'], $data['name']);
                $message->to($mail_admin)->subject('Новый СПИКЕР на сайте intensive.coach-school.com.ua');

            });
            if($result){
                $name = $data['name'];
                $email = $data['email'];
                $phone = $data['phone'];
                $theme = $data['theme'];
               DB::insert('insert into speakers (name, email, phone, theme) values(?,?,?,?)',[$name, $email,$phone,$theme]);
                return redirect()->route('thanks')->with('status','Email is send');
            }

        }elseif($request->isMethod('post')){
            /*form without them input*/
            //error messages array
            $messages = [
                'required' => "Поле :attribute обязательно к заполнению",
                'email' => "Поле :attribute обязательно к заполнению",
                'phone' => "Поле :attribute обязательно к заполнению"
            ];
            //validate form data
            $this->validate($request,[
                'name'=>'required|max:255',
                'email'=>'required',
                'phone'=>'required'
            ], $messages);

            $data=$request->all();
            //mail send code here
            $result =  Mail::send('site.email', ['data'=>$data], function($message) use ($data){
                $mail_admin = env('MAIL_ADMIN');
                $message->from($data['email'], $data['name']);
                $message->to($mail_admin)->subject('Новая регистрация на сайте intensive.coach-school.com.ua');

            });
            if($result){
                $name = $data['name'];
                $email = $data['email'];
                $phone = $data['phone'];
              DB::insert('insert into registrations (name, email, phone) values(?,?,?)',[$name, $email,$phone]);
                return redirect()->route('thanks')->with('status','Email is send');
            }
        }


        $videos = Video::all();
        $menus = Menu::where('is_active','1')->get();
        $prices = Price::all();
        $programs = Program::orderBy('sort')->get();

        //Menu
        
		if(Cache::has('menu')){
			$menusList = Cache::get('menu','Menu Error');
		}
		else{
		$menusList = array();
			foreach ($menus as $menu){
				$item = array('name'=>$menu->name ,'anchor'=>$menu->anchor,'active'=>$menu->is_active,'phone'=>$menu->is_phone,);
				array_push($menusList, $item);

			}
			Cache::put('menu',$menusList,1);
		}
		
        $videoList = array();
        foreach ($videos as $video){
            $item = array('videoLink'=>$video->video_link);
            array_push($videoList, $item);

        }
        $priceList =array();

        foreach ($prices as $price){
            $item = array('discountPrice'=>$price->discount_price, 'discountPrice2'=>$price->discount_price_2, 'eventDate'=>$price->event_date, 'fullPrice'=>$price->full_price,);
            array_push($priceList, $item);
            $eventDate = ($price->event_date);

            /*ДАТА ДЕЙСТВИЯ СКИДКИ*/
            $time = strtotime($price->discount_date);

            # Создаем ассоциативный массив где каждому числу месяца присваем название месяца
            $month_name = array( 1 => 'января', 2 => 'февраля', 3 => 'марта',
                4 => 'апреля', 5 => 'мая', 6 => 'июня',
                7 => 'июля', 8 => 'августа', 9 => 'сентября',
                10 => 'октября', 11 => 'ноября', 12 => 'декабря'
            );
            #Получаем название месяца, здесь используется массив
            $month = $month_name[ date( 'n',$time ) ];
            $day   = date( 'j',$time );
            $discountDate = "$day $month";

            $time2 = strtotime($price->discount_date_2);

            $month_name = array( 1 => 'января', 2 => 'февраля', 3 => 'марта',
                4 => 'апреля', 5 => 'мая', 6 => 'июня',
                7 => 'июля', 8 => 'августа', 9 => 'сентября',
                10 => 'октября', 11 => 'ноября', 12 => 'декабря'
            );
            $month2 = $month_name[ date( 'n',$time2 ) ];
            $day2  = date( 'j',$time2 );
            $discountDate_2 = "$day2 $month2";

        }
        /*Программа*/
        $programList = array();
        foreach ($programs as $program){
            $item = array('programName'=>$program->program_name, 'speaker'=>$program->speaker, 'programText'=>$program->program_text, 'programImg'=>$program->img,);
            array_push($programList, $item);

        }



        return view('site.index', array(
            'menusList'=> $menusList,
            'videoList'=> $videoList,
            'priceList' => $priceList,
            'discountDate' => $discountDate,
            'discountStrDate' => $time,
            'discountStrDate2' => $time2,
            'discountDate2' => $discountDate_2,
            'eventDate' => $eventDate,
            'programList' => $programList,


        ));
    }
}
