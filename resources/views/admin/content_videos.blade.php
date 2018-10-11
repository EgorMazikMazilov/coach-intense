<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                @if($videos)
                    {!!Form::open(['url'=>route('videosEdit'),'class'=>'form-horizontal', 'method'=>'POST'])!!}
                    <table class="table table-bordered table-hover dataTable>
                    <thead>
                    <div class="row">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Название</th>
                        <th>ID видео</th>
                        <th>Активный пункт?</th>
                        <th>Отметить</th>

                    </tr>
            </div>
            </thead>
            <tbody>
            @foreach($videos as $key => $video)

                <tr>
                    <td>{{$video->id}}</td>
                    <td>{!! Html::link(route('videosEdit',['video'=>$video->id]), $video->header,['alt'=>'Редактировать пункт '.'"'.$video->header.'"'])!!}</td>
                    <td>{{$video->video_link}}</td>
                    <td>{{($video->is_active == 1) ? 'Да' : 'Нет'}}</td>
                    <td>{!! Form::checkbox('item[]',$video->id, false) !!}</td>




                </tr>
            @endforeach
            </tbody></table>
            @endif
            <div class="row col-md-6">{!! Html::link(route('videosAdd'), 'Добавить новый отзыв', ['class'=>'btn btn-block btn-primary'])!!}</div>
            <div class="row col-md-6"><input class="btn btn-danger pull-right" type="submit" name="delUser" value="Удалить отмеченные"></div>


            {!!Form::close()!!}
        </div><!-- /.box-body -->
    </div>

</div>
</div>