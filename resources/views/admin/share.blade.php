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
        {!! Form::open (['url'=>(route('admin.share.update',['share'=>$share[0]->id])),'class'=>"form-horizontal", 'enctype'=>'multipart/form-data'])!!}

        <div class="box-body">
            <div class="form-group">
                {!! Form::label('title','Заголовок страницы',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('title', isset($share[0]->title) ? $share[0]->title :old('title'), ['class'=>'form-control','required'=>'required', 'id'=>'title']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('title_ua','UA Заголовок страницы',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('title_ua', isset($share[0]->title_ua) ? $share[0]->title_ua :old('title_ua'), ['class'=>'form-control','required'=>'required', 'id'=>'title_ua']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('content','Контент',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('content', isset($share[0]->content) ? $share[0]->content :old('content'), ['class'=>'form-control textareaEdit','required'=>'required', 'id'=>'content']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('content_ua','UA Контент',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('content_ua', isset($share[0]->content_ua) ? $share[0]->content_ua :old('content_ua'), ['class'=>'form-control textareaEdit','required'=>'required', 'id'=>'content_ua']) !!}
                </div>
            </div>


            @if(isset($share[0]->share_img))
                <div class="form-group">
                    {!! Form::label('share_img','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">

                        {{Html::image(asset('/assets/img').'/shares/'.$share[0]->share_img,$share[0]->share_img,['class'=>'img-responsive', 'style'=>'width:250px;'])}}
                        {{Form::hidden('old_image', $share[0]->share_img)}}
                    </div>
                </div>
            @endif
            <div class="form-group">
                {!! Form::label('share_img','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::file('share_img',['class'=>'filestyle','data-buttonText'=>'Выберете файл','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не выбран', isset($share[0]->share_img) ? '' :'required="required"']) !!}
                </div>
            </div>
            @if(isset($share[0]->id))
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
