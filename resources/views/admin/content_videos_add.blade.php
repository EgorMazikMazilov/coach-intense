<div class="box box-primary">

    <div class="box box-info">
        <div class="box-header with-border">
        </div>
        {!! Form::open(['url'=>route('videosAdd'), 'class'=>'form-horizontal','method'=>'post','enctype'=>'multipart/form-data','role'=>'form']) !!}
        <div class="box-body">
            <div class="form-group">
                {!! Form::label('header','Название',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('header',old('header'),['class'=>'form-control', 'placeholder'=>'Введите название отзыва', 'required'=>'required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('video_link','ID видео',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('video_link',old('video_link'),['class'=>'form-control', 'placeholder'=>'ID видео на YouTube', 'required'=>'required' ]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('is_active','Показывать на сайте?',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::checkbox('is_active') !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">

        </div>
        <!-- /.box-footer -->
        {!! Form::close() !!}

    </div>

</div>
