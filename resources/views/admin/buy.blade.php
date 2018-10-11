@extends('layouts.admin')
@section('head')
    @include('admin.head')
@endsection
@section('header')
    @include('admin.header')
@endsection
@section('sidebar')
    @include('admin.sidebar')
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">

        </div>
        {!! Form::open (['url'=>(route('admin.buy.update',['buy'=>$buy[0]->id])),'class'=>"form-horizontal"])!!}

        <div class="box-body">
            <div class="form-group">
                {!! Form::label('title_left','Заголовок левой части',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('title_left', isset($buy[0]->title_left) ? $buy[0]->title_left :old('title_left'), ['class'=>'form-control','required'=>'required', 'id'=>'title_left']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('title_left_ua','Заголовок левой части UA',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('title_left_ua', isset($buy[0]->title_left_ua) ? $buy[0]->title_left_ua :old('title_left_ua'), ['class'=>'form-control','required'=>'required', 'id'=>'title_left_ua']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('tel_left','Телефоны левой части',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('tel_left', isset($buy[0]->tel_left) ? $buy[0]->tel_left :old('tel_left'), ['class'=>'form-control','required'=>'required', 'id'=>'tel_left']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('email_left','Email левой части',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('email_left', isset($buy[0]->email_left) ? $buy[0]->email_left :old('email_left'), ['class'=>'form-control','required'=>'required', 'id'=>'email_left']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('title_right','Заголовок правой части',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('title_right', isset($buy[0]->title_right) ? $buy[0]->title_right :old('title_right'), ['class'=>'form-control','required'=>'required', 'id'=>'title_right']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('title_right_ua','Заголовок правой части UA',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('title_right_ua', isset($buy[0]->title_right_ua) ? $buy[0]->title_right_ua :old('title_right_ua'), ['class'=>'form-control','required'=>'required', 'id'=>'title_right_ua']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('tel_right','Телефоны правой части',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('tel_right', isset($buy[0]->tel_right) ? $buy[0]->tel_right :old('tel_right'), ['class'=>'form-control','required'=>'required', 'id'=>'tel_right']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('email_right','Email правой части',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('email_right', isset($buy[0]->email_right) ? $buy[0]->email_right :old('email_right'), ['class'=>'form-control','required'=>'required', 'id'=>'email_right']) !!}
                </div>
            </div>

            @if(isset($buy[0]->id))
                <input type="hidden" name="_method" value="PUT">
            @endif
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
                </div>
            </div>
        </div><!-- box-body -->
        {!! Form::close() !!}
    </div>
@endsection
@section('script')
    @include('admin.script')
    <script>
        $('.textareaEdit').wysihtml5();
    </script>
@endsection
