<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                @if($moderators)

                    <table class="table table-bordered table-hover dataTable">
                        <thead>
                        <div class="row">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Имя</th>
                                <th>Почта</th>
                                <th>Модерирование</th>
                                <th>Действие</th>

                            </tr>
                        </div>
                        </thead>
                        <tbody>
                        <tbody>

                        @foreach($moderators as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{!! Html::link(route('admin.moderators.edit',['moderator'=>$item->email]),$item->name) !!}</td>
                                <td>{{$item->email}}</td>

                                <td>{{($item->role == 22) ? 'Разрешено' : 'Запрещено'}}</td>

                                <td>{!! Form::open(['url' => route('admin.moderators.destroy',['moderator'=>$item->email]),'class'=>'form-horizontal','method'=>'POST']) !!}
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
</div>