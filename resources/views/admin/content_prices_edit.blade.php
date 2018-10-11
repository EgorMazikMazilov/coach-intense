<div class="box box-primary">

    <div class="box box-info">
        <div class="box-header with-border">
        </div>
        {!! Form::open(['url'=>route('pricesEdit',array('price'=>$data['id'])), 'class'=>'form-horizontal','method'=>'post','enctype'=>'multipart/form-data','role'=>'form']) !!}
        <div class="box-body">
            <div class="form-group">
                {!! Form::hidden('id', $data['id']) !!}
                {!! Form::label('discount_price','Цена с первой скидкой',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('discount_price',$data['discount_price'],['class'=>'form-control', 'placeholder'=>'Введите стоимость с первой скидкой',]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('discount_date','Дата и время действия первой скидки',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('discount_date',$data['discount_date'],['class'=>'form-control', 'placeholder'=>'Введите дату действия скидки',]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('discount_price_2','Цена со второй скидкой',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('discount_price_2',$data['discount_price_2'],['class'=>'form-control', 'placeholder'=>'Введите стоимость со второй скидкой',]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('discount_date_2','Дата и время действия второй скидки',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('discount_date_2',$data['discount_date_2'],['class'=>'form-control', 'placeholder'=>'Введите дату действия второй скидки',]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('full_price','Полная стоимость',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('full_price',$data['full_price'],['class'=>'form-control', 'placeholder'=>'Введите полную стоимость',]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('event_date','Дата мероприятия',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('event_date',$data['event_date'],['class'=>'form-control', 'placeholder'=>'Введите полную стоимость',]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('is_active','Показывать на сайте?',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-8">
                    @if($data['is_active'] == 0)
                        {!! Form::checkbox('is_active',0)!!}
                    @else
                        {!! Form::checkbox('is_active',1, true)!!}
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

        </div>
        <!-- /.box-footer -->
        {!! Form::close() !!}

    </div>

</div>
