<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                @if($prodCat)
                    <table class="table table-bordered table-hover dataTable">
                        <thead>
                        <div class="row">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Название</th>
                                <th>Alias</th>
                                <th>Категория</th>
                                <th>Описание</th>
                                <th>Изображение категории</th>
                                <th>Активный пункт?</th>
                                <th>Действие</th>

                            </tr>
                        </div>
                        </thead>
                        <tbody>
                        <tbody>

                        @foreach($prodCat as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{!! Html::link(route('admin.products.edit',['products'=>$item->alias]),$item->title) !!}</td>
                                <td>{{$item->alias}}</td>
                                <td>{{$item->cat_id}}</td>
                                <td>{{$item->description}}</td>
                                <td>{!!Html::image(asset('/assets/img/'.$item->category_img),$item->title, ['width' => '100px'])!!}</td>
                                <td>{{($item->is_active == 1) ? 'Да' : 'Нет'}}</td>

                                    <td>{!! Form::open(['url' => route('admin.products.destroy',['categories'=>$item->alias]),'class'=>'form-horizontal','method'=>'POST']) !!}
                                    {{ method_field('DELETE') }}
                                    {!! Form::button('Удалить', ['class' => 'btn-danger','type'=>'submit']) !!}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                        </tbody></table>
                            </tr>

                        </tbody>
                        </tbody>
                    </table>
                    @endif
            </div><!-- /.box-body -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {!! Html::link(route('admin.products.create'), 'Добавить новый пункт', ['class'=>'btn btn-success', ])!!}
    </div>
</div>