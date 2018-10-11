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
                @if($partners)
                    <table class="table table-bordered table-hover dataTable">
                        <thead>
                        <div class="row">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Название</th>
                                <th>Название UA</th>
                                <th>Контент</th>
                                <th>Контент UA</th>
                                <th>Логотип</th>
                                <th>Активный пункт?</th>
                                <th>Действие</th>

                            </tr>
                        </div>
                        </thead>
                        <tbody>
                        <tbody>

                        @foreach($partners as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{!! Html::link(route('admin.partners.edit',['lists'=>$item->alias]),$item->title) !!}</td>
                                <td>{{$item->title_ua}}</td>
                                <td>{{$item->content}}</td>
                                <td>{{$item->content_ua}}</td>
                                <td>{!!Html::image(asset('/assets/img/partners/'.$item->img_logo),$item->title, ['width' => '100px'])!!}</td>
                                <td>{{($item->is_active == 1) ? 'Да' : 'Нет'}}</td>

                                <td>{!! Form::open(['url' => route('admin.partners.destroy',['lists'=>$item->alias]),'class'=>'form-horizontal','method'=>'POST']) !!}
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
        {!! Html::link(route('admin.partners.create'), 'Добавить партнера', ['class'=>'btn btn-success', ])!!}
    </div>
</div>