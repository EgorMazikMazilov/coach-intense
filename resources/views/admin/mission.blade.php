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
        {!! Form::open (['url'=>(route('admin.mission.update',['share'=>$mission[0]->id])),'class'=>"form-horizontal", 'enctype'=>'multipart/form-data'])!!}

        <div class="box-body">

            <div class="form-group">
                {!! Form::label('mission_text','Контент для миссии',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('mission_text', isset($mission[0]->mission_text) ? $mission[0]->mission_text :old('mission_text'), ['class'=>'form-control textareaEdit','required'=>'required', 'id'=>'mission_text']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('mission_text_ua','UA Контент для миссии',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('mission_text_ua', isset($mission[0]->mission_text_ua) ? $mission[0]->mission_text_ua :old('mission_text_ua'), ['class'=>'form-control textareaEdit','required'=>'required', 'id'=>'mission_text_ua']) !!}
                </div>
            </div>


            @if(isset($mission[0]->mission_img))
                <div class="form-group">
                    {!! Form::label('mission_img','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">

                        {{Html::image(asset('/assets/img').'/mission/'.$mission[0]->mission_img,'',['class'=>'img-responsive', 'style'=>'width:250px;'])}}
                        {{Form::hidden('old_mission_image', $mission[0]->mission_img)}}
                    </div>
                </div>
            @endif
            <div class="form-group">
                {!! Form::label('mission_img','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::file('mission_img',['class'=>'filestyle','data-buttonText'=>'Выберете файл','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не выбран', isset($mission[0]->mission_img) ? '' :'required="required"']) !!}
                </div>
            </div>
            <hr>
            <div class="form-group">
                {!! Form::label('cennosti_text','Контент для ценностей',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('cennosti_text', isset($mission[0]->cennosti_text) ? $mission[0]->cennosti_text :old('cennosti_text'), ['class'=>'form-control textareaEdit','required'=>'required', 'id'=>'cennosti_text']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('cennosti_text_ua','UA Контент для ценностей',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('cennosti_text_ua', isset($mission[0]->cennosti_text_ua) ? $mission[0]->cennosti_text_ua :old('cennosti_text_ua'), ['class'=>'form-control textareaEdit','required'=>'required', 'id'=>'cennosti_text_ua']) !!}
                </div>
            </div>


            @if(isset($mission[0]->cennosti_img))
                <div class="form-group">
                    {!! Form::label('cennosti_img','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">

                        {{Html::image(asset('/assets/img').'/mission/'.$mission[0]->cennosti_img,'',['class'=>'img-responsive', 'style'=>'width:250px;'])}}
                        {{Form::hidden('old_cennosti_image', $mission[0]->cennosti_img)}}
                    </div>
                </div>
            @endif
            <div class="form-group">
                {!! Form::label('cennosti_img','Главное изображение',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::file('cennosti_img',['class'=>'filestyle','data-buttonText'=>'Выберете файл','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не выбран', isset($mission[0]->cennosti_img) ? '' :'required="required"']) !!}
                </div>
            </div>
            <hr>
            @if(isset($mission[0]->id))
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
