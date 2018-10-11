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
        {!! Form::open (['url'=>(route('admin.settings.update',['settings'=>$settings[0]->id])),'class'=>"form-horizontal", 'enctype'=>'multipart/form-data'])!!}

        <div class="box-body">
            <div class="form-group">
                {!! Form::label('s_title','Title',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_title', isset($settings[0]->s_title) ? $settings[0]->s_title :old('s_title'), ['class'=>'form-control','required'=>'required', 'id'=>'s_title']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('s_title_ua','UA Title',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_title_ua', isset($settings[0]->s_title_ua) ? $settings[0]->s_title_ua :old('s_title_ua'), ['class'=>'form-control','required'=>'required', 'id'=>'s_title_ua']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('s_description','Description',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_description', isset($settings[0]->s_description) ? $settings[0]->s_description :old('s_description'), ['class'=>'form-control ','required'=>'required', 'id'=>'s_description']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('s_description_ua','UA Description',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_description_ua', isset($settings[0]->s_description_ua) ? $settings[0]->s_description_ua :old('s_description_ua'), ['class'=>'form-control ','required'=>'required', 'id'=>'s_description_ua']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('s_keywords','Keywords',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_keywords', isset($settings[0]->s_keywords) ? $settings[0]->s_keywords :old('s_keywords'), ['class'=>'form-control ','required'=>'required', 'id'=>'s_keywords']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('s_keywords_ua','UA Keywords',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_keywords_ua', isset($settings[0]->s_keywords_ua) ? $settings[0]->s_keywords_ua :old('s_keywords_ua'), ['class'=>'form-control','required'=>'required', 'id'=>'s_keywords_ua']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('s_address','Адрес',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_address', isset($settings[0]->s_address) ? $settings[0]->s_address :old('s_address'), ['class'=>'form-control','required'=>'required', 'id'=>'s_address']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('s_address_ua','UA Адрес',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_address_ua', isset($settings[0]->s_address_ua) ? $settings[0]->s_address_ua :old('s_address_ua'), ['class'=>'form-control','required'=>'required', 'id'=>'s_address_ua']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('s_tel_1','Телефон 1',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_tel_1', isset($settings[0]->s_tel_1) ? $settings[0]->s_tel_1 :old('s_tel_1'), ['class'=>'form-control','required'=>'required', 'id'=>'s_tel_1']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('s_tel_2','Телефон 2',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_tel_2', isset($settings[0]->s_tel_1) ? $settings[0]->s_tel_1 :old('s_tel_2'), ['class'=>'form-control','required'=>'required', 'id'=>'s_tel_2']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('s_tel_3','Телефон 3',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_tel_3', isset($settings[0]->s_tel_1) ? $settings[0]->s_tel_1 :old('s_tel_3'), ['class'=>'form-control','required'=>'required', 'id'=>'s_tel_3']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('s_fax','ФАКС',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_fax', isset($settings[0]->s_fax) ? $settings[0]->s_fax :old('s_fax'), ['class'=>'form-control','required'=>'required', 'id'=>'s_fax']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('s_email','Email для отправки формы',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('s_email', isset($settings[0]->s_email) ? $settings[0]->s_email :old('s_email'), ['class'=>'form-control','required'=>'required', 'id'=>'s_email']) !!}
                </div>
            </div>


            @if(isset($settings[0]->id))
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
