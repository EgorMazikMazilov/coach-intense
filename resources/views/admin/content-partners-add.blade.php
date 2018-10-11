
<div class="box box-primary">
    <div class="box-header with-border">

    </div>
    <!-- /.box-header -->
    <!-- form start -->

    {!! Form::open (['url'=>(isset($partners->id)) ? route('admin.partners.update',['item'=>$partners->id]) : route('admin.partners.store'),'class'=>"form-horizontal", 'enctype'=>'multipart/form-data'])!!}
    <div class="box-body">
        <div class="form-group">

            </div>
        <div class="form-group">
            {!! Form::label('title','Название ',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('title', isset($partners->title) ? $partners->title :old('title'), ['placeholder'=>'Название новости', 'class'=>'form-control','required'=>'required', 'id'=>'title', 'onkeyup'=>'translit()']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('title_ua','Название новости UA',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::text('title_ua', isset($partners->title_ua) ? $partners->title_ua :old('title_ua'), ['placeholder'=>'Название новости UA', 'class'=>'form-control','required'=>'required', 'id'=>'title_ua']) !!}
            </div>
        </div><!-- //form-group -->


        {!! Form::hidden('alias', isset($partners->alias) ? $partners->alias :old('alias'), ['placeholder'=>'алиас', 'class'=>'form-control','required'=>'required', 'id'=>'alias']) !!}
        @if(isset($partners->alias))
            {{Form::hidden('old_alias', $partners->alias)}}
            @endif

        {{--        ОПИСАНИЕ        --}}
        <div class="form-group">
            {!! Form::label('content','Текст новости',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::textarea('content', isset($partners->content) ? $partners->content :old('content'), ['placeholder'=>'Текст новости', 'class'=>'form-control','required'=>'required', 'id'=>'editor']) !!}
            </div>
        </div><!-- //form-group -->

        <div class="form-group">
            {!! Form::label('content_ua','Текст новости UA',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::textarea('content_ua', isset($partners->content_ua) ? $partners->content_ua :old('content_ua'), ['placeholder'=>'Текст новости UA', 'class'=>'form-control','required'=>'required', 'id'=>'editor1']) !!}
            </div>
        </div>
        <!-- //form-group -->

        {{--       // IMG        --}}

        @if(isset($partners->img_logo))
            <div class="form-group">
                {!! Form::label('img','Логотип',['class'=>'col-sm-3 control-label']) !!}
                <div class="col-sm-9">

                    {{Html::image(asset('/assets/img/partners/'.$partners->img_logo))}}
                    {{Form::hidden('old_image', $partners->img_logo)}}
                </div>
            </div>
        @endif
        <div class="form-group">
            {!! Form::label('img','Загрузить логотип',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                {!! Form::file('img',['class'=>'filestyle','data-buttonText'=>'Выберете файл','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не выбран', isset($partners->img_logo) ? '' :'required="required"']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('is_active','Показывать на сайте?',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-9">
                @if(isset($partners->is_active) && $partners->is_active == 0)
                    {!! Form::checkbox('is_active',0)!!}
                @else
                    {!! Form::checkbox('is_active',1, true)!!}
                @endif
            </div>
        </div>


    @if(isset($partners->id))
        <input type="hidden" name="_method" value="PUT">
    @endif
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
        </div>
    </div>
</div><!-- //box-body -->
    <div class="box-footer">
    </div>
    {{Form::close()}}
</div>


<script>
    setTimeout(function(){
        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor1');
        //console.log("added");
    }, 500);
</script>
<script>
    function translit(){
// Символ, на который будут заменяться все спецсимволы
        var space = '-';
// Берем значение из нужного поля и переводим в нижний регистр
        var text = $('#title').val().toLowerCase();
// Массив для транслитерации
        var transl = {
            'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'e', 'є': 'e', 'ж': 'zh',
            'з': 'z', 'и': 'i', 'і': 'i', 'ї': 'ji', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n',
            'о': 'o', 'п': 'p', 'р': 'r','с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h',
            'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'sh','ъ': space, 'ы': 'y', 'ь': space, 'э': 'e', 'ю': 'yu', 'я': 'ya',
            ' ': space, '_': space, '`': space, '~': space, '!': space, '@': space,
            '#': space, '$': space, '%': space, '^': space, '&': space, '*': space,
            '(': space, ')': space,'-': space, '\=': space, '+': space, '[': space,
            ']': space, '\\': space, '|': space, '/': space,'.': space, ',': space,
            '{': space, '}': space, '\'': space, '"': space, ';': space, ':': space,
            '?': space, '<': space, '>': space, '№':space
        }
        var result = '';
        var curent_sim = '';
        for(i=0; i < text.length; i++) {
            // Если символ найден в массиве то меняем его
            if(transl[text[i]] != undefined) {
                if(curent_sim != transl[text[i]] || curent_sim != space){
                    result += transl[text[i]];
                    curent_sim = transl[text[i]];
                }
            }
            // Если нет, то оставляем так как есть
            else {
                result += text[i];
                curent_sim = text[i];
            }
        }
        result = TrimStr(result);
// Выводим результат

        $('#alias').val(result);

    }
    function TrimStr(s) {
        s = s.replace(/^-/, '');
        return s.replace(/-$/, '');
    }
    // Выполняем транслитерацию при вводе текста в поле
    $(function(){
        $('#title').keyup(function(){
            translit();
            return false;
        });
    });
</script>