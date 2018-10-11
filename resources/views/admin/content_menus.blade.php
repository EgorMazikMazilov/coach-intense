<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                @if($menus)
                    {!!Form::open(['url'=>route('menusEdit'),'class'=>'form-horizontal', 'method'=>'POST'])!!}
                <table class="table table-bordered table-hover dataTable>
                    <thead>
                    <div class="row">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Название</th>
                        <th>Название id секции куда листать</th>
                        <th>Активный пункт?</th>
                        <th>Это телефон?</th>
                        <th>Отметить</th>

                    </tr>
            </div>
                    </thead>
                    <tbody>
                    @foreach($menus as $key => $menu)

                    <tr>
                        <td>{{$menu->id}}</td>
                        <td>{!! Html::link(route('menusEdit',['menu'=>$menu->id]), $menu->name,['alt'=>'Редактировать пункт '.'"'.$menu->header.'"'])!!}</td>
                        <td>{{$menu->anchor}}</td>
                        <td>{{($menu->is_active == 1) ? 'Да' : 'Нет'}}</td>
                        <td>{{($menu->is_phone == 0) ? 'Нет' : 'Да'}}</td>
                        <td>{!! Form::checkbox('item[]',$menu->id, false) !!}</td>

                    </tr>
                    @endforeach
                    </tbody></table>
            <div class="row col-md-6">{!! Html::link(route('menusAdd'), 'Добавить новый пункт', ['class'=>'btn btn-block btn-primary'])!!}</div>
            <div class="row col-md-6"><input class="btn btn-danger pull-right" type="submit" name="delUser" value="Удалить отмеченные"></div>
            {!!Form::close()!!}
                @endif
            </div><!-- /.box-body -->
        </div>
    </div>
</div>