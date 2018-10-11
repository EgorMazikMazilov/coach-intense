<div class="box box-primary">

    <div class="box box-info">
        <div class="box-header with-border">
        </div>

        {!! Form::open(['url'=>route('programsEdit', array('program'=>$data['id'])), 'class'=>'form-horizontal','method'=>'post','enctype'=>'multipart/form-data','role'=>'form']) !!}
        <div class="box-body">
            <div class="form-group">
                {!! Form::hidden('id', $data['id']) !!}
                {!! Form::label('program_name','Название',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('program_name',$data['program_name'],['class'=>'form-control', 'placeholder'=>'Введите название программы']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('speaker','Ведущий',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('speaker',$data['speaker'],['class'=>'form-control', 'placeholder'=>'Введите имя ведущего' ]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('sort','Сортировка',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('sort',$data['sort'],['class'=>'form-control', 'placeholder'=>'Позиция для отображения' ]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('program_text','Текст программы',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::textarea('program_text',$data['program_text'],['id'=>'editor','class'=>'form-control', 'placeholder'=>'Введите текст программы']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('old_img','Изображение',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Html::image('assets/img/'.$data['img'], '',  ['class'=>'img-responsive img-thumbnail']) !!}
                    {!! Form::hidden('old_images', $data['img']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('img','Старое изображение',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::file('img',['class'=>'filestyle', 'data-buttonText'=>'Выберете файл','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не выбран']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    {!! Form::button('Изменить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
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