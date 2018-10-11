<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                @if($speakers)
                    {!!Form::open(['url'=>route('speakersEdit'),'class'=>'form-horizontal', 'method'=>'POST'])!!}
                    <table class="table table-bordered table-hover dataTable>
                    <thead>
                    <div class="row">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Телефон</th>
                        <th>Тема</th>
                        <th>Дата регистрации</th>
                        <th>Отметить</th>

                    </tr>
            </div>
            </thead>
            <tbody>
            @foreach($speakers as $key => $speaker)
                
                <tr>
                    <td>{{$speaker->id}}</td>
                    <td>{{$speaker->name}}</td>
                    <td>{{$speaker->email}}</td>
                    <td>{{$speaker->phone}}</td>
                    <td>{{$speaker->theme}}</td>
                    <td>{{$speaker->created_at->format('d-m-Y')}}</td>
                    <td>{!! Form::checkbox('item[]',$speaker->id, false) !!}</td>

                </tr>
            @endforeach

            </tbody>
            </table>

                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <input class="btn btn-danger" type="submit" name="delUser" value="Удалить отмеченные">
                    </div>
                    {!! Form::close() !!}
                    <div class="col-md-8 col-md-pull-4">
                        <a class="btn btn-default"  id="selAll">Выделить все</a>
                        <a class="btn btn-default" id="deSel">Снять выделение</a>
                    </div>
                </div>


            @endif

        </div><!-- /.box-body -->
    </div>

</div>
</div>
