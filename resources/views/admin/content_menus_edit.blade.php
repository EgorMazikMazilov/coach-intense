<div class="box box-primary">

    <div class="box box-info">
        <div class="box-header with-border">
        {!! Form::open(['url'=>route('menusEdit',array('menu'=>$data['id'])), 'class'=>'form-horizontal','method'=>'post','enctype'=>'multipart/form-data','role'=>'form']) !!}
        <div class="box-body">
            <div class="form-group">
                {!! Form::hidden('id', $data['id']) !!}

                {!! Form::label('header','Название',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('name',$data['name'],['class'=>'form-control', 'placeholder'=>'Введите название', 'required'=>'required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('anchor','Ссылка пункта (см.ниже)',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('anchor',$data['anchor'],['class'=>'form-control', 'placeholder'=>'ссылка навигации' ]) !!}

                </div>
            </div>
            <div class="form-group">
                {!! Form::label('is_active','Показывать в строке меню?',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    @if($data['is_active'] == 0)
                        {!! Form::checkbox('is_active',0)!!}
                    @else
                        {!! Form::checkbox('is_active',1, true)!!}
                    @endif
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('is_phone','Это телефон?',['class'=>'col-sm-2 control-label']) !!}
                <div class="col-sm-8">
                    @if($data['is_phone'] == 0)
                    {!! Form::checkbox('is_phone',0)!!}
                    @else
                    {!! Form::checkbox('is_phone',1,true)!!}
                        @endif
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
            @if($data['is_phone'] == 0)
            <p>Доступные варианты (скопировать и вставить):
            <li>2 экран - about-text</li>
            <li>3 экран - section-sponsors</li>
            <li>4 экран - section-about</li>
            <li>5 экран - section-schedule</li>
            <li>6 экран - section-speakers</li>
            <li> 7 экран - section-testimonials</li>
            <li>8 экран - section-about1</li>
            <li>9 экран - section-faq</li>
            <li>10 экран - section-about2</li>
            <li>11 экран - section-prices</li>
            </p>
                @else
                <p><i><b>ссылку для телефона записывать в формате - tel:+380001112233</b></i></p>
                @endif
        </div>
        <!-- /.box-footer -->
            {!! Form::close() !!}
    </div>

</div>
