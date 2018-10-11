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
        {!! Form::open (['url'=>(route('admin.corporate.update',['corporate'=>$corporate[0]->id])),'class'=>"form-horizontal", 'enctype'=>'multipart/form-data'])!!}

        <div class="box-body">
            <div class="form-group">
                {!! Form::label('corporation_title','Заголовок страницы',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('corporation_title', isset($corporate[0]->corporation_title) ? $corporate[0]->corporation_title :old('corporation_title'), ['class'=>'form-control','required'=>'required', 'id'=>'corporation_title']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('corporation_title_ua','UA Заголовок страницы',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('corporation_title_ua', isset($corporate[0]->corporation_title_ua) ? $corporate[0]->corporation_title_ua :old('corporation_title_ua'), ['class'=>'form-control','required'=>'required', 'id'=>'corporation_title_ua']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('corporate_head_text','Текст первого абзаца',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('corporate_head_text', isset($corporate[0]->corporate_head_text) ? $corporate[0]->corporate_head_text :old('corporate_head_text'), ['class'=>'form-control','required'=>'required', 'id'=>'corporate_head_text']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('corporate_head_text_ua','UA Текст первого абзаца',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('corporate_head_text_ua', isset($corporate[0]->corporate_head_text_ua) ? $corporate[0]->corporate_head_text_ua :old('corporate_head_text_ua'), ['class'=>'form-control','required'=>'required', 'id'=>'corporate_head_text_ua']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('corporation_content','Контент',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('corporation_content', isset($corporate[0]->corporation_content) ? $corporate[0]->corporation_content :old('corporation_content'), ['class'=>'form-control textareaEdit','required'=>'required', 'id'=>'corporation_content']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('corporation_content_ua','UA Контент',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('corporation_content_ua', isset($corporate[0]->corporation_content_ua) ? $corporate[0]->corporation_content_ua :old('corporation_content_ua'), ['class'=>'form-control textareaEdit','required'=>'required', 'id'=>'corporation_content_ua']) !!}
                </div>
            </div>

            @if(isset($corporate[0]->corporation_img))
                <div class="form-group">
                    {!! Form::label('corporation_img','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">

                        {{Html::image(asset('/assets/img').'/corporate/'.$corporate[0]->corporation_img,$corporate[0]->corporation_title,['class'=>'img-responsive', 'style'=>'width:250px;'])}}
                        {{Form::hidden('old_image', $corporate[0]->corporation_img)}}
                    </div>
                </div>
            @endif
            <div class="form-group">
                {!! Form::label('corporation_img','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::file('corporation_img',['class'=>'filestyle','data-buttonText'=>'Выберете файл','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не выбран', isset($corporate[0]->corporation_img) ? '' :'required="required"']) !!}
                </div>
            </div>
            @if(isset($corporate[0]->id))
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
