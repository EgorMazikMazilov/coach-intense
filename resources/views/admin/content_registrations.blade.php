<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                @if($registrations)
                    {!!Form::open(['url'=>route('registrationsEdit'),'class'=>'form-horizontal', 'method'=>'POST'])!!}
                    <table class="table table-bordered table-hover dataTable>
                    <thead>
                    <div class="row">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Телефон</th>
                        <th>Дата регистрации</th>
                        <th>Отметить</th>

                    </tr>
            </div>
            </div>
            </div>
            </thead>
            <tbody>
            @foreach($registrations as $key => $registration)

                <tr>
                    <td>{{$registration->id}}</td>
                    <td>{{$registration->name}}</td>
                    <td>{{$registration->email}}</td>
                    <td>{{$registration->phone}}</td>
                    <td>{{$registration->created_at->format('d-m-Y')}}</td>
                    <td>{!! Form::checkbox('item[]',$registration->id, false) !!}</td>

                </tr>
            @endforeach

            </tbody></table>
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
