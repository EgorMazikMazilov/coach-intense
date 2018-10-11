<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                @if($programs)
                    {!!Form::open(['url'=>route('programsEdit'),'class'=>'form-horizontal', 'method'=>'POST'])!!}
                    <table class="table table-bordered table-hover dataTable>
                    <thead>
                    <tr class="row">
                        <th style="width: 10px">#</th>
                        <th>Название</th>
                        <th>Автор или ведущий</th>
                        <th>Описание программы</th>
                        <th>Изображение</th>
                        <th>Приоритет</th>
                        <th>Действие</th>


                    </tr>
            </div>
            </thead>
            <tbody>
            @foreach($programs as $key => $program)

                <tr>
                    <td>{{$program->id}}</td>
                    <td>{!! Html::link(route('programsEdit',['program'=>$program->id]), $program->program_name,['alt'=>'Редактировать пункт '.'"'.$program->program_name.'"'])!!}</td>
                    <td>{{$program->speaker}}</td>
                    <td>{{$program->program_text}}</td>
                    <td>{!! Html::image(asset('assets/img/'.$program->img),$program->program_name, array('style' => 'width: 50%;')) !!}</td>
                    <td>{{$program->sort}}</td>
                    <td>{!! Form::checkbox('item[]',$program->id, false) !!}</td>

                </tr>
            @endforeach
            </tbody></table>
            @endif
            <div class="row col-md-6">{!! Html::link(route('programsAdd'), 'Добавить новый пункт', ['class'=>'btn btn-block btn-primary', ])!!}</div>
            <div class="row col-md-6"><input class="btn btn-danger pull-right" type="submit" name="delUser" value="Удалить отмеченные"></div>
            {!! Form::close() !!}
        </div><!-- /.box-body -->
    </div>

</div>
</div>