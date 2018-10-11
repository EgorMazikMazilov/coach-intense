<div class="box box-primary">


    <div class="box box-info">
        <div class="box-header with-border">
        </div>
        {!! Form::open(['url'=>route('programsAdd'), 'class'=>'form-horizontal','method'=>'post','enctype'=>'multipart/form-data','role'=>'form']) !!}
            <div class="box-body">
                <div class="form-group">
                    {!! Form::label('program_name','Название',['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('program_name',old('program_name'),['class'=>'form-control', 'placeholder'=>'Введите название программы', 'required'=>'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('speaker','Ведущий',['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('speaker',old('speaker'),['class'=>'form-control', 'placeholder'=>'Введите имя ведущего', 'required'=>'required' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('sort','Сортировка',['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::text('sort',old('Сортировка'),['class'=>'form-control', 'placeholder'=>'Позиция для отображения', 'required'=>'required' ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('program_text','Текст программы',['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::textarea('program_text',old('program_text'),['id'=>'editor','class'=>'form-control', 'placeholder'=>'Введите текст программы', 'required'=>'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('img','Изображение',['class'=>'col-sm-2 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::file('img',['class'=>'filestyle', 'data-buttonText'=>'Выберете файл','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не выбран', 'required'=>'required']) !!}
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
<script>
    setTimeout(function(){
        CKEDITOR.replace('editor');
        //console.log("added");
    }, 500);
</script>