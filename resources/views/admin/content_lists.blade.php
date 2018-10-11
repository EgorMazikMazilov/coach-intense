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
                @if($lists)
                    <table class="table table-bordered table-hover dataTable">
                        <thead>
                        <div class="row">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Название</th>
                                <th>Название UA</th>
                                <th>Описание</th>
                                <th>Описание UA</th>
                                <th>Изображение категории</th>
                                <th>Активный пункт?</th>
                                <th>Действие</th>

                            </tr>
                        </div>
                        </thead>
                        <tbody>
                        <tbody>

                        @foreach($lists as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{!! Html::link(route('admin.lists.edit',['lists'=>$item->alias]),$item->title) !!}</td>
                                <td>{{$item->title_ua}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->description_ua}}</td>
                                <td>{!!Html::image(asset('/assets/img/list_img/'.$item->head_img),$item->title, ['width' => '100px'])!!}</td>
                                <td>{{($item->is_active == 1) ? 'Да' : 'Нет'}}</td>

                                <td>{!! Form::open(['url' => route('admin.lists.destroy',['lists'=>$item->alias]),'class'=>'form-horizontal','method'=>'POST']) !!}
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
        {!! Html::link(route('admin.lists.create'), 'Добавить новый пункт', ['class'=>'btn btn-success', ])!!}
    </div>
</div>