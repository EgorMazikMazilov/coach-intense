<div class="box box-primary">

    <div class="box box-info">
        <div class="box-header with-border">
        </div>
        {!! Form::open(['url'=>route('menusAdd'), 'class'=>'form-horizontal','method'=>'post','enctype'=>'multipart/form-data','role'=>'form']) !!}
        <div class="box-body">
            <div class="form-group">
                {!! Form::label('header','Название',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('name',old('name'),['class'=>'form-control', 'placeholder'=>'Введите название', 'required'=>'required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('anchor','Ссылка пункта (см.ниже)',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('anchor',old('anchor'),['class'=>'form-control', 'placeholder'=>'ссылка навигации' ]) !!}

                </div>
            </div>
            <div class="form-group">
                {!! Form::label('is_active','Показывать в строке меню?',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::checkbox('is_active') !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('is_phone','Это телефон?',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::checkbox('is_phone') !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        {!! Form::close() !!}
        <div class="box-footer">
            <p>Доступные варианты заполнения поля "Ссылка":
            <li>если это телефон то заполнять - tel:+380001112233</li>
            <li>2 экран - about-text</li>
            <li>3 экран - section-sponsors</li>
            <li>4 экран - section-about</li>
            <li>5 экран - section-schedule</li>
            <li>6 экран - section-speakers</li>
            <li>7 экран - section-testimonials</li>
            <li>8 экран - section-about1</li>
            <li>9 экран - section-faq</li>
            <li>10 экран - section-about2</li>
            <li>11 экран - section-prices</li>
            </p>
        </div>
        <!-- /.box-footer -->

    </div>

</div>
