
<div class="box box-primary">
    <div class="box-header with-border">

    </div>
    <!-- /.box-header -->
    <!-- form start -->

    {!! Form::open (['url'=> route('admin.moderators.update',['item'=>$user->id]),'class'=>"form-horizontal"])!!}
    <div class="box-body">
        <div class="form-group">
            {!! Form::label('name','Имя',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('name', isset($user->name) ? $user->name :old('name'), ['placeholder'=>'Имя', 'class'=>'form-control','required'=>'required', 'id'=>'name']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email','Почта пользователя',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::email('email', isset($user->email) ? $user->email :old('email'), ['placeholder'=>'Почта пользователя', 'class'=>'form-control','required'=>'required', 'id'=>'email']) !!}
            </div>
        </div>
        {{Form::hidden('old_email', $user->email)}}

        <div class="form-group">
            {!! Form::label('role','Разрешить модерирование?',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                    {!! Form::checkbox('role', 1)!!}

            </div>
        </div>
        @if(isset($user->id))
            <input type="hidden" name="_method" value="PUT">
        @endif
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
            </div>
        </div>


    </div><!-- //box-body -->

    <div class="box-footer">
    </div>
    {{Form::close()}}
</div>
