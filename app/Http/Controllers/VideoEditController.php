<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class VideoEditController extends Controller
{


    public function execute($id, Video $video, Request $request)
    {
        if ($request->isMethod('post')) {
            // обработка чекбоксов /admin/videos
            if (isset($_POST['delUser']) and isset($_POST['item'])) {
                foreach ($_POST['item'] as $item) {
                    $delItem = Video::find($item);
                    $delItem->delete();
                }
                return redirect()->back();
            }
            // Получение данніх из формі  /admin/videos/edit/['id']
            $input = $request->except('_token');
            $validator = Validator::make($input, [
                'header'=>'required|max:255',
                'video_link'=>'max:255'
            ]);
            if ($validator->fails()){
                return redirect()->route('videosEdit', ['video'=>$input['id']])->withErrors($validator);
            }
            if(!isset($input['is_active'])){
                $input['is_active'] = 0;
            }else{
                $input['is_active'] = 1;
            }
            DB::table('videos')->where('id', $input['id'])->update(["header" => $input['header'],"video_link" => $input['video_link'], "is_active" => $input['is_active'] ]);

            if($video->update()){
                return redirect('admin/videos');
            }

        }


        //рендеринг страницы редактирования видео
        $video= Video::find($id);
        $old = $video -> toArray();

        if(view()->exists('admin.videos_edit')){
            $data = [
                'title' => 'Редактирование видео отзыва - '.$old['header'],
                'data' => $old
            ];

            return view('admin.videos_edit', $data);
        }
    }
}
