<div class="box box-primary">
    <div class="box-header with-border">

    </div>
    {!! Form::open (['url'=>(isset($slider->id)) ? route('admin.slider.update',['item'=>$slider->id]) : route('admin.slider.store'),'class'=>"form-horizontal", 'enctype'=>'multipart/form-data'])!!}

    <div class="box-body">
        {{--  ********************** 1 *************************** --}}
        <div class="form-group">
            {!! Form::label('img_link','Ссыдка слайда',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('img_link', isset($slider->img_link) ? $slider->img_link :old('img_link'), ['class'=>'form-control', 'id'=>'img_link']) !!}
            </div>
        </div>

        @if(isset($slider->img))
            <div class="form-group">
                {!! Form::label('img','Изображение слайда',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">

                    {{Html::image(asset('/assets/img').'/slider/'.$slider->img,$slider->img,['class'=>'img-responsive', 'style'=>'width:250px;'])}}
                    {{Form::hidden('old_image', $slider->img)}}
                </div>
            </div>
        @endif
        <div class="form-group">
            {!! Form::label('img','Изображение слайда',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::file('img',['class'=>'filestyle','data-buttonText'=>'Выберете файл','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не выбран', isset($slider->img) ? '' :'required="required"']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('is_active_1','Показывать на сайте?',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                @if(isset($slider->is_active) && $slider->is_active == 0)
                    {!! Form::checkbox('is_active',0)!!}
                @else
                    {!! Form::checkbox('is_active',1, true)!!}
                @endif
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('img_sort',' Порядок отображения',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::number('img_sort', isset($slider->img_sort) ? $slider->img_sort :old('img_sort'), ['class'=>'form-control','required'=>'required', 'id'=>'img_sort']) !!}
            </div>
        </div>
        {{--  *********************** /1 ************************* --}}

        @if(isset($slider->id))
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