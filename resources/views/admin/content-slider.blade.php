<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{Session::get('flash_message')}}
                    </div>
                @endif
                @if($slider)
                    <table class="table table-bordered table-hover dataTable">
                        <thead>
                        <div class="row">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Редактировать</th>
                                <th>Ссылка</th>
                                <th>Изображение</th>
                                <th>Порядок</th>
                                <th>Активный пункт?</th>
                                <th>Действие</th>
                            </tr>
                        </div>
                        </thead>
                        <tbody>
                        <tbody>

                        @foreach($slider as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{!! Html::link(route('admin.slider.edit',['slider'=>$item->id]),'Слайд') !!}</td>
                                <td>{{$item->img_link}}</td>
                                <td>{!!Html::image(asset('/assets/img/slider/'.$item->img),$item->id, ['width' => '100px'])!!}</td>
                                <td>{{$item->img_sort}}</td>
                                <td>{{($item->is_active == 1) ? 'Да' : 'Нет'}}</td>

                                <td>{!! Form::open(['url' => route('admin.slider.destroy',['slider'=>$item->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                                    {{ method_field('DELETE') }}
                                    {!! Form::button('Удалить', ['class' => 'btn-danger','type'=>'submit']) !!}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div><!-- /.box-body -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {!! Html::link(route('admin.slider.create'), 'Добавить новый слайд', ['class'=>'btn btn-success', ])!!}
    </div>
</div>